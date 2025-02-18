<?php
namespace PayPal\Braintree\Block\Customer\Venmo\VaultTokenRenderer;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\Customer\Venmo\VaultTokenRenderer
 */
class Interceptor extends \PayPal\Braintree\Block\Customer\Venmo\VaultTokenRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \PayPal\Braintree\Gateway\Config\Venmo\Config $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $data);
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
