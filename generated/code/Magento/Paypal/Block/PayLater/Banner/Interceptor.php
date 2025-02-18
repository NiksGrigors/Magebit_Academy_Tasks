<?php
namespace Magento\Paypal\Block\PayLater\Banner;

/**
 * Interceptor class for @see \Magento\Paypal\Block\PayLater\Banner
 */
class Interceptor extends \Magento\Paypal\Block\PayLater\Banner implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Paypal\Model\PayLaterConfig $payLaterConfig, \Magento\Paypal\Model\SdkUrl $sdkUrl, array $data = [], ?\Magento\Paypal\Model\Config $paypalConfig = null)
    {
        $this->___init();
        parent::__construct($context, $payLaterConfig, $sdkUrl, $data, $paypalConfig);
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
