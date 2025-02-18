<?php
namespace Magento\GroupedProduct\Block\Adminhtml\Items\Column\Name\Grouped;

/**
 * Interceptor class for @see \Magento\GroupedProduct\Block\Adminhtml\Items\Column\Name\Grouped
 */
class Interceptor extends \Magento\GroupedProduct\Block\Adminhtml\Items\Column\Name\Grouped implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\Product\OptionFactory $optionFactory, array $data = [], ?\Magento\Catalog\Helper\Data $catalogHelper = null)
    {
        $this->___init();
        parent::__construct($context, $stockRegistry, $stockConfiguration, $registry, $optionFactory, $data, $catalogHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
