<?php
namespace Magento\PaymentServicesPaypal\Block\SmartButtonsCart;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\SmartButtonsCart
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\SmartButtonsCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PaymentServicesPaypal\Model\Config $config, \Magento\Checkout\Model\Session $session, string $pageType = 'minicart', array $componentConfig = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $session, $pageType, $componentConfig, $data);
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
