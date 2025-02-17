<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\WebapiAsync\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\NotFoundException;
use Magento\TestFramework\MessageQueue\PreconditionFailedException;
use Magento\TestFramework\MessageQueue\PublisherConsumerController;
use Magento\TestFramework\MessageQueue\EnvironmentPreconditionException;
use Magento\TestFramework\TestCase\WebapiAbstract;
use Magento\TestFramework\Helper\Bootstrap;
use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\Framework\Phrase;
use Magento\Framework\Registry;
use Magento\Framework\Webapi\Exception;
use Magento\Catalog\Api\ProductRepositoryInterface;

/**
 * Check async request for multiple products creation service,
 * scheduling bulk to rabbitmq
 * running consumers and check async.operation.add consumer
 * check if product was created by async bulk requests
 *
 * @magentoAppIsolation enabled
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class AsyncBulkScheduleTest extends WebapiAbstract
{
    public const SERVICE_NAME = 'catalogProductRepositoryV1';
    public const SERVICE_VERSION = 'V1';
    public const REST_RESOURCE_PATH = '/V1/products';
    public const ASYNC_BULK_RESOURCE_PATH = '/async/bulk/V1/products';
    public const ASYNC_CONSUMER_NAME = 'async.operations.all';

    public const KEY_TIER_PRICES = 'tier_prices';
    public const KEY_SPECIAL_PRICE = 'special_price';
    public const KEY_CATEGORY_LINKS = 'category_links';

    public const BULK_UUID_KEY = 'bulk_uuid';

    /**
     * @var string[]
     */
    protected $consumers = [
        self::ASYNC_CONSUMER_NAME,
    ];

    /**
     * @var string[]
     */
    private $skus = [];

    /**
     * @var PublisherConsumerController
     */
    private $publisherConsumerController;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @var Registry
     */
    private $registry;

    protected function setUp(): void
    {
        $this->objectManager = Bootstrap::getObjectManager();
        $logFilePath = TESTS_TEMP_DIR . "/MessageQueueTestLog.txt";
        $this->registry = $this->objectManager->get(Registry::class);

        $params = array_merge_recursive(
            \Magento\TestFramework\Helper\Bootstrap::getInstance()->getAppInitParams(),
            ['MAGE_DIRS' => ['cache' => ['path' => TESTS_TEMP_DIR . '/cache']]]
        );

        /** @var PublisherConsumerController publisherConsumerController */
        $this->publisherConsumerController = $this->objectManager->create(PublisherConsumerController::class, [
            'consumers'     => $this->consumers,
            'logFilePath'   => $logFilePath,
            'appInitParams' => $params,
        ]);
        $this->productRepository = $this->objectManager->create(ProductRepositoryInterface::class);

        try {
            $this->publisherConsumerController->initialize();
        } catch (EnvironmentPreconditionException $e) {
            $this->markTestSkipped($e->getMessage());
        } catch (PreconditionFailedException $e) {
            $this->fail(
                $e->getMessage()
            );
        }

        parent::setUp();
    }

    /**
     * @dataProvider productsArrayCreationProvider
     */
    public function testAsyncScheduleBulkMultipleEntities($products)
    {
        $this->_markTestAsRestOnly();
        $this->skus = [];
        foreach ($products as $product) {
            $this->skus[] = $product['product'][ProductInterface::SKU];
        }
        $this->clearProducts();

        $response = $this->saveProductAsync($products);
        $this->assertArrayHasKey(self::BULK_UUID_KEY, $response);
        $this->assertNotNull($response[self::BULK_UUID_KEY]);

        $this->assertCount(2, $response['request_items']);
        foreach ($products as $key => $product) {
            $this->assertEquals('accepted', $response['request_items'][$key]['status']);
        }
        $this->assertFalse($response['errors']);

        //assert one products is created
        try {
            $this->publisherConsumerController->waitForAsynchronousResult(
                [$this, 'assertProductCreation'],
                [$products]
            );
        } catch (PreconditionFailedException $e) {
            $this->fail("Not all products were created");
        }
    }

    /**
     * @dataProvider productSingleCreationProvider
     */
    public function testAsyncScheduleBulkSingleEntity($products)
    {
        $this->_markTestAsRestOnly();
        $this->skus = [];
        $this->skus[] = $products[0]['product'][ProductInterface::SKU];
        $this->clearProducts();

        $response = $this->saveProductAsync($products);
        $this->assertArrayHasKey(self::BULK_UUID_KEY, $response);
        $this->assertNotNull($response[self::BULK_UUID_KEY]);

        $this->assertCount(1, $response['request_items']);
        $this->assertEquals('accepted', $response['request_items'][0]['status']);
        $this->assertFalse($response['errors']);

        //assert one products is created
        try {
            $this->publisherConsumerController->waitForAsynchronousResult(
                [$this, 'assertProductCreation'],
                [$products]
            );
        } catch (PreconditionFailedException $e) {
            $this->fail("Not all products were created");
        }
    }

    /**
     * @dataProvider wrongProductCreationProvider
     */
    public function testAsyncScheduleBulkWrongEntity($products)
    {
        $this->_markTestAsRestOnly();
        $this->skus = [];
        foreach ($products as $product) {
            $this->skus[] = $product['product'][ProductInterface::SKU];
        }
        $this->clearProducts();

        $response = null;
        try {
            $response = $this->saveProductAsync($products);
        } catch (\Exception $e) {
            $this->assertEquals(400, $e->getCode());
        }
        $this->assertNull($response);
        $this->assertEquals(0, $this->checkProductsCreation());
    }

    /**
     * @param string $sku
     * @param string|null $storeCode
     * @dataProvider productGetDataProvider
     */
    public function testGETRequestToAsyncBulk($sku, $storeCode = null)
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Specified request cannot be processed.');

        $this->_markTestAsRestOnly();
        $serviceInfo = [
            'rest' => [
                'resourcePath' => self::ASYNC_BULK_RESOURCE_PATH . '/' . $sku,
                'httpMethod'   => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_GET,
            ],
        ];

        $response = null;
        try {
            $response = $this->_webApiCall($serviceInfo, [ProductInterface::SKU => $sku], null, $storeCode);
        } catch (NotFoundException $e) {
            $this->assertEquals(400, $e->getCode());
        }
        $this->assertNull($response);
    }

    protected function tearDown(): void
    {
        $this->clearProducts();
        $this->publisherConsumerController->stopConsumers();
        parent::tearDown();
    }

    private function clearProducts()
    {
        $size = $this->objectManager->create(Collection::class)
            ->addAttributeToFilter('sku', ['in' => $this->skus])
            ->load()
            ->getSize();

        if ($size == 0) {
            return;
        }

        $this->registry->unregister('isSecureArea');
        $this->registry->register('isSecureArea', true);
        try {
            foreach ($this->skus as $sku) {
                $this->productRepository->deleteById($sku);
            }
        } catch (\Exception $e) {
            throw $e;
            //nothing to delete
        }
        $this->registry->unregister('isSecureArea');

        $size = $this->objectManager->create(Collection::class)
            ->addAttributeToFilter('sku', ['in' => $this->skus])
            ->load()
            ->getSize();

        if ($size > 0) {
            throw new Exception(new Phrase("Collection.php size after clearing the products: %size", ['size' => $size]));
        }
    }

    /**
     * @return array
     */
    public function productsArrayCreationProvider()
    {
        $productBuilder = function ($data) {
            return array_replace_recursive(
                $this->getSimpleProductData(),
                $data
            );
        };

        return
            [
                [
                    [
                        [
                            'product' =>
                                $productBuilder([
                                    ProductInterface::TYPE_ID => 'simple',
                                    ProductInterface::SKU     => 'psku-test-1-multiple',
                                ]),
                        ],
                        [
                            'product' => $productBuilder([
                                ProductInterface::TYPE_ID => 'virtual',
                                ProductInterface::SKU     => 'psku-test-2-multiple',
                            ]),
                        ],
                    ],
                ],
            ];
    }

    /**
     * @return array
     */
    public function productSingleCreationProvider()
    {
        $productBuilder = function ($data) {
            return array_replace_recursive(
                $this->getSimpleProductData(),
                $data
            );
        };

        return
            [
                [
                    [
                        [
                            'product' =>
                                $productBuilder([
                                    ProductInterface::TYPE_ID => 'simple',
                                    ProductInterface::SKU     => 'psku-test-1-single',
                                ]),
                        ],
                    ],
                ],
            ];
    }

    /**
     * @return array
     */
    public function wrongProductCreationProvider()
    {
        $productBuilder = function ($data) {
            return array_replace_recursive(
                $this->getSimpleProductData(),
                $data
            );
        };

        $wrongProductBuilder = function ($data) {
            return array_replace_recursive(
                $this->getWrongProductStructureData(),
                $data
            );
        };

        return
            [
                [
                    [
                        [
                            'product' =>
                                $productBuilder([
                                    ProductInterface::TYPE_ID => 'simple',
                                    ProductInterface::SKU     => 'psku-test-1-wrong',
                                ]),
                        ],
                        [
                            'product' => $productBuilder([
                                ProductInterface::TYPE_ID => 'virtual',
                                ProductInterface::SKU     => 'psku-test-2-wrong',
                            ]),
                        ],
                        [
                            'product' =>
                                $wrongProductBuilder([
                                    'wrong_attribute'     => 'simple',
                                    ProductInterface::SKU => 'psku-test-3-wrong',
                                ]),
                        ],
                    ],
                ],
            ];
    }

    /**
     * @return array
     */
    public function productGetDataProvider()
    {
        return [
            ['psku-test-1', null],
        ];
    }

    /**
     * Get Simple Product Data
     *
     * @param array $productData
     * @return array
     */
    private function getSimpleProductData($productData = [])
    {
        return [
            ProductInterface::SKU              => isset($productData[ProductInterface::SKU])
                ? $productData[ProductInterface::SKU] : uniqid('sku-', true),
            ProductInterface::NAME             => isset($productData[ProductInterface::NAME])
                ? $productData[ProductInterface::NAME] : uniqid('sku-', true),
            ProductInterface::VISIBILITY       => 4,
            ProductInterface::TYPE_ID          => 'simple',
            ProductInterface::PRICE            => 3.62,
            ProductInterface::STATUS           => 1,
            ProductInterface::ATTRIBUTE_SET_ID => 4,
            'custom_attributes'                => [
                ['attribute_code' => 'cost', 'value' => ''],
                ['attribute_code' => 'description', 'value' => 'Description'],
            ],
        ];
    }

    /**
     * Get Wrong Simple Product Data without required attributes
     *
     * @param array $productData
     * @return array
     */
    private function getWrongProductStructureData($productData = [])
    {
        return [
            ProductInterface::SKU => isset($productData[ProductInterface::SKU])
                ? $productData[ProductInterface::SKU] : uniqid('sku-', true),
        ];
    }

    /**
     * @param $requestData
     * @param string|null $storeCode
     * @return mixed
     */
    private function saveProductAsync($requestData, $storeCode = null)
    {
        $serviceInfo = [
            'rest' => [
                'resourcePath' => self::ASYNC_BULK_RESOURCE_PATH,
                'httpMethod'   => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_POST,
            ],
        ];

        return $this->_webApiCall($serviceInfo, $requestData, null, $storeCode);
    }

    public function assertProductCreation()
    {
        $collection = $this->objectManager->create(Collection::class)
            ->addAttributeToFilter('sku', ['in' => $this->skus])
            ->load();
        $size = $collection->getSize();

        return $size == count($this->skus);
    }

    /**
     * @return int
     */
    public function checkProductsCreation()
    {
        $collection = $this->objectManager->create(Collection::class)
            ->addAttributeToFilter('sku', ['in' => $this->skus])
            ->load();
        $size = $collection->getSize();

        return $size;
    }
}
