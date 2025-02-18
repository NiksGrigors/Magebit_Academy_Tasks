<?php
namespace PayPal\Braintree\Block\System\Config\Form\CreditFieldset;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\System\Config\Form\CreditFieldset
 */
class Interceptor extends \PayPal\Braintree\Block\System\Config\Form\CreditFieldset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\View\Helper\Js $jsHelper, \PayPal\Braintree\Gateway\Config\PayPalCredit\Config $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $authSession, $jsHelper, $config, $data);
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
