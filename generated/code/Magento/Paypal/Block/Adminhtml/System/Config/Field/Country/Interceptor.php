<?php
namespace Magento\Paypal\Block\Adminhtml\System\Config\Field\Country;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\System\Config\Field\Country
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\System\Config\Field\Country implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Url $url, \Magento\Framework\View\Helper\Js $jsHelper, \Magento\Directory\Helper\Data $directoryHelper, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureHtmlRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $url, $jsHelper, $directoryHelper, $data, $secureHtmlRenderer);
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
