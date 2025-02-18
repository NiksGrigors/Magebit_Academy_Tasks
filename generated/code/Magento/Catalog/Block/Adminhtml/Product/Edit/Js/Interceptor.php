<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Js;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Js
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Js implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Tax\Api\TaxCalculationInterface $calculationService, \Magento\Tax\Model\TaxClass\Source\Product $productTaxClassSource, array $data = [], ?\Magento\Tax\Helper\Data $taxHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $currentCustomer, $jsonHelper, $calculationService, $productTaxClassSource, $data, $taxHelper);
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
