<?php
namespace PayPal\Braintree\Block\Form;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\Form
 */
class Interceptor extends \PayPal\Braintree\Block\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Model\Config $paymentConfig, \Magento\Backend\Model\Session\Quote $sessionQuote, \PayPal\Braintree\Gateway\Config\Config $gatewayConfig, \PayPal\Braintree\Model\Adminhtml\Source\CcType $ccType, \Psr\Log\LoggerInterface $logger, \Magento\Payment\Helper\Data $paymentDataHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $paymentConfig, $sessionQuote, $gatewayConfig, $ccType, $logger, $paymentDataHelper, $data);
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
