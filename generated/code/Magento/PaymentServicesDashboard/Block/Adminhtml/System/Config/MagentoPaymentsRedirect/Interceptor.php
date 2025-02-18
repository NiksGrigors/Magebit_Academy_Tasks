<?php
namespace Magento\PaymentServicesDashboard\Block\Adminhtml\System\Config\MagentoPaymentsRedirect;

/**
 * Interceptor class for @see \Magento\PaymentServicesDashboard\Block\Adminhtml\System\Config\MagentoPaymentsRedirect
 */
class Interceptor extends \Magento\PaymentServicesDashboard\Block\Adminhtml\System\Config\MagentoPaymentsRedirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\View\Helper\Js $jsHelper, \Magento\Config\Model\Config $backendConfig, \Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $authSession, $jsHelper, $backendConfig, $secureRenderer, $data);
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
