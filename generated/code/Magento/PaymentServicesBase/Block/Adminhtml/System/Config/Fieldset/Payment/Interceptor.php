<?php
namespace Magento\PaymentServicesBase\Block\Adminhtml\System\Config\Fieldset\Payment;

/**
 * Interceptor class for @see \Magento\PaymentServicesBase\Block\Adminhtml\System\Config\Fieldset\Payment
 */
class Interceptor extends \Magento\PaymentServicesBase\Block\Adminhtml\System\Config\Fieldset\Payment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\View\Helper\Js $jsHelper, \Magento\Config\Model\Config $backendConfig, \Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer, \Magento\Framework\App\ProductMetadataInterface $productMeta, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $authSession, $jsHelper, $backendConfig, $secureRenderer, $productMeta, $data);
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
