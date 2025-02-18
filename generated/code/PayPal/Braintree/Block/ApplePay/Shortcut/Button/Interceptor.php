<?php
namespace PayPal\Braintree\Block\ApplePay\Shortcut\Button;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\ApplePay\Shortcut\Button
 */
class Interceptor extends \PayPal\Braintree\Block\ApplePay\Shortcut\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Payment\Model\MethodInterface $payment, \PayPal\Braintree\Model\ApplePay\Auth $auth, \Magento\Checkout\Model\DefaultConfigProvider $defaultConfigProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $payment, $auth, $defaultConfigProvider, $data);
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
