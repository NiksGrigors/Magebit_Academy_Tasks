<?php
namespace PayPal\Braintree\Block\Paypal\ProductPage;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\Paypal\ProductPage
 */
class Interceptor extends \PayPal\Braintree\Block\Paypal\ProductPage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Checkout\Model\Session $checkoutSession, \PayPal\Braintree\Gateway\Config\PayPal\Config $config, \PayPal\Braintree\Gateway\Config\PayPalCredit\Config $payPalCreditConfig, \PayPal\Braintree\Gateway\Config\PayPalPayLater\Config $payPalPayLaterConfig, \PayPal\Braintree\Gateway\Config\Config $braintreeConfig, \PayPal\Braintree\Model\Ui\ConfigProvider $configProvider, \Magento\Payment\Model\MethodInterface $payment, \Magento\Framework\Registry $registry, \Magento\Directory\Model\Currency $currency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $localeResolver, $checkoutSession, $config, $payPalCreditConfig, $payPalPayLaterConfig, $braintreeConfig, $configProvider, $payment, $registry, $currency, $data);
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
