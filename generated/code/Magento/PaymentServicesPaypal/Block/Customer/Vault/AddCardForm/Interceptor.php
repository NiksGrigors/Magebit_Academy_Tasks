<?php
namespace Magento\PaymentServicesPaypal\Block\Customer\Vault\AddCardForm;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\Customer\Vault\AddCardForm
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\Customer\Vault\AddCardForm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PaymentServicesPaypal\Model\Config $paymentsConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $customerSession, \Magento\Integration\Api\UserTokenIssuerInterface $tokenIssuer, \Magento\Integration\Model\UserToken\UserTokenParametersFactory $tokenParamsFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Psr\Log\LoggerInterface $logger, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $paymentsConfig, $storeManager, $customerSession, $tokenIssuer, $tokenParamsFactory, $scopeConfig, $logger, $data);
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
