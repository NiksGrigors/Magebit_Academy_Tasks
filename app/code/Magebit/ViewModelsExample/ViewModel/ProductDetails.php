<?php declare(strict_types=1);

namespace Magebit\ViewModelsExample\ViewModel;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ProductDetails implements ArgumentInterface
{
    public function __construct(
        protected ScopeConfigInterface $scopeConfig,
        private ProductRepositoryInterface $productRepository,
    ) {}

    /**
     * @return ProductInterface|null
     */
    public function getProduct(): ?ProductInterface
    {
        try {
            return $this->productRepository->getById(42);
        } catch (NoSuchEntityException $e) {
            return null;
        }
    }
}
