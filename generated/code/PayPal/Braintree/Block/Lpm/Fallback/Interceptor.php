<?php
namespace PayPal\Braintree\Block\Lpm\Fallback;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\Lpm\Fallback
 */
class Interceptor extends \PayPal\Braintree\Block\Lpm\Fallback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \PayPal\Braintree\Gateway\Config\Config $braintreeConfig, \PayPal\Braintree\Model\Adapter\BraintreeAdapter $braintreeAdapter, \PayPal\Braintree\Model\Lpm\Config $lpmConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $braintreeConfig, $braintreeAdapter, $lpmConfig, $data);
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
