<?php
namespace Magento\PaymentServicesBase\Block\Adminhtml\System\Config\Fieldset\Child;

/**
 * Interceptor class for @see \Magento\PaymentServicesBase\Block\Adminhtml\System\Config\Fieldset\Child
 */
class Interceptor extends \Magento\PaymentServicesBase\Block\Adminhtml\System\Config\Fieldset\Child implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\View\Helper\Js $jsHelper, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $authSession, $jsHelper, $data, $secureRenderer);
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
