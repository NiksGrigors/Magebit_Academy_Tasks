<?php
namespace PayPal\Braintree\Model\Config\Source\FraudProtectionUrl;

/**
 * Interceptor class for @see \PayPal\Braintree\Model\Config\Source\FraudProtectionUrl
 */
class Interceptor extends \PayPal\Braintree\Model\Config\Source\FraudProtectionUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($scopeConfig, $context, $data);
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
