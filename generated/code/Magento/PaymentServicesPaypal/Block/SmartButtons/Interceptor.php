<?php
namespace Magento\PaymentServicesPaypal\Block\SmartButtons;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\SmartButtons
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\SmartButtons implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PaymentServicesPaypal\Model\Config $config, \Magento\Checkout\Model\Session $session, string $pageType = 'minicart', array $componentConfig = [], array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Checkout\Model\CompositeConfigProvider $compositeConfigProvider = null)
    {
        $this->___init();
        parent::__construct($context, $config, $session, $pageType, $componentConfig, $data, $serializer, $compositeConfigProvider);
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
