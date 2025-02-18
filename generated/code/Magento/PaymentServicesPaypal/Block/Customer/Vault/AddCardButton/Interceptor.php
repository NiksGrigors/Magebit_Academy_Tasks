<?php
namespace Magento\PaymentServicesPaypal\Block\Customer\Vault\AddCardButton;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\Customer\Vault\AddCardButton
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\Customer\Vault\AddCardButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PaymentServicesPaypal\Model\Config $config, \Magento\Store\Model\StoreManagerInterface $storeManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $storeManager, $data);
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
