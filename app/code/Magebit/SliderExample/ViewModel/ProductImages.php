<?php

declare(strict_types=1);

namespace Magebit\SliderExample\ViewModel;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Block\Product\ImageFactory as ProductImage;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ProductImages implements ArgumentInterface
{
    public function __construct(
        private ProductRepositoryInterface $productRepository,
        private SearchCriteriaBuilder $searchCriteria,
        private ProductImage $productImageFactory
    ){}

    /**
     * @return array[]
     */
    public function getProductImages(): array
    {
        $this->searchCriteria->setPageSize(4);
        $searchCriteria = $this->searchCriteria->create();
        $searchResults = $this->productRepository->getList($searchCriteria);
        $products = $searchResults->getItems();

        $productImages = [];
        foreach ($products as $product) {
            $productImage = $this->productImageFactory->create($product, 'product_page_image_medium');
            $productImages[] = [
                'src' => $productImage->getImageUrl(),
                'alt' => $product->getName(),
                'caption' => $product->getName()
            ];
        }

        return $productImages;
    }
}
