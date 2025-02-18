<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Totals\Tax;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Totals\Tax
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Totals\Tax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\AdminOrder\Create $orderCreate, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Sales\Helper\Data $salesData, \Magento\Sales\Model\Config $salesConfig, array $data = [], ?\Magento\Tax\Helper\Data $taxHelper = null)
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $orderCreate, $priceCurrency, $salesData, $salesConfig, $data, $taxHelper);
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
