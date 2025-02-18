<?php
namespace Magento\PaymentServicesDashboard\Block\Adminhtml\System\Config\MagentoPaymentsButton;

/**
 * Interceptor class for @see \Magento\PaymentServicesDashboard\Block\Adminhtml\System\Config\MagentoPaymentsButton
 */
class Interceptor extends \Magento\PaymentServicesDashboard\Block\Adminhtml\System\Config\MagentoPaymentsButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $data, $secureRenderer);
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
