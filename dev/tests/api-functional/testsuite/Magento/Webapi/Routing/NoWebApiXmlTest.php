<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Webapi\Routing;

/**
 * Class to test routing with a service that has no webapi.xml
 */
class NoWebApiXmlTest extends \Magento\Webapi\Routing\BaseService
{
    /**
     * @var string
     */
    private $_version;

    /**
     * @var string
     */
    private $_restResourcePath;

    protected function setUp(): void
    {
        $this->_version = 'V1';
        $this->_restResourcePath = "/{$this->_version}/testModule2NoWebApiXml/";
    }

    /**
     *  Test get Item
     */
    public function testItem()
    {
        $this->_markTestAsRestOnly();
        $itemId = 1;
        $serviceInfo = [
            'rest' => [
                'resourcePath' => $this->_restResourcePath . $itemId,
                'httpMethod' => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_GET,
            ],
        ];
        $requestData = ['id' => $itemId];
        $this->_assertNoRestRouteException($serviceInfo, $requestData);
    }

    /**
     * Test fetching all items
     */
    public function testItems()
    {
        $this->_markTestAsRestOnly();
        $serviceInfo = [
            'rest' => [
                'resourcePath' => $this->_restResourcePath,
                'httpMethod' => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_GET
            ],
        ];
        $this->_assertNoRestRouteException($serviceInfo);
    }

    /**
     *  Test create Item
     */
    public function testCreate()
    {
        $this->_markTestAsRestOnly();
        $createdItemName = 'createdItemName';
        $serviceInfo = [
            'rest' => [
                'resourcePath' => $this->_restResourcePath,
                'httpMethod' => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_POST
            ],
        ];
        $requestData = ['name' => $createdItemName];
        $this->_assertNoRestRouteException($serviceInfo, $requestData);
    }

    /**
     *  Test update Item
     */
    public function testUpdate()
    {
        $this->_markTestAsRestOnly();
        $itemId = 1;
        $serviceInfo = [
            'rest' => [
                'resourcePath' => $this->_restResourcePath . $itemId,
                'httpMethod' => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_PUT,
            ],
        ];
        $requestData = ['id' => $itemId];
        $this->_assertNoRestRouteException($serviceInfo, $requestData);
    }

    /**
     *  Test remove Item
     */
    public function testRemove()
    {
        $this->_markTestAsRestOnly();
        $itemId = 1;
        $serviceInfo = [
            'rest' => [
                'resourcePath' => $this->_restResourcePath . $itemId,
                'httpMethod' => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_DELETE,
            ],
        ];
        $requestData = ['id' => $itemId];
        $this->_assertNoRestRouteException($serviceInfo, $requestData);
    }
}
