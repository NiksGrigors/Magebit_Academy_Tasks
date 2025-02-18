<?php
namespace PayPal\Braintree\Block\Customer\GooglePay\VaultTokenRenderer;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\Customer\GooglePay\VaultTokenRenderer
 */
class Interceptor extends \PayPal\Braintree\Block\Customer\GooglePay\VaultTokenRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \PayPal\Braintree\Model\GooglePay\Ui\ConfigProvider $configProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $configProvider, $data);
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
