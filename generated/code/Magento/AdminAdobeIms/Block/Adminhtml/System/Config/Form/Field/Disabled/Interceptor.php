<?php
namespace Magento\AdminAdobeIms\Block\Adminhtml\System\Config\Form\Field\Disabled;

/**
 * Interceptor class for @see \Magento\AdminAdobeIms\Block\Adminhtml\System\Config\Form\Field\Disabled
 */
class Interceptor extends \Magento\AdminAdobeIms\Block\Adminhtml\System\Config\Form\Field\Disabled implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer, \Magento\AdminAdobeIms\Service\ImsConfig $adminImsConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $secureRenderer, $adminImsConfig, $data);
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
