<?php
namespace Magento\Sales\Block\Adminhtml\Order\AbstractOrder;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\AbstractOrder
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\AbstractOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Helper\Admin $adminHelper, array $data = [], ?\Magento\Shipping\Helper\Data $shippingHelper = null, ?\Magento\Tax\Helper\Data $taxHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $adminHelper, $data, $shippingHelper, $taxHelper);
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
