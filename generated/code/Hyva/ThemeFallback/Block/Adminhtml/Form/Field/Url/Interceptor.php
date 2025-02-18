<?php
namespace Hyva\ThemeFallback\Block\Adminhtml\Form\Field\Url;

/**
 * Interceptor class for @see \Hyva\ThemeFallback\Block\Adminhtml\Form\Field\Url
 */
class Interceptor extends \Hyva\ThemeFallback\Block\Adminhtml\Form\Field\Url implements \Magento\Framework\Interception\InterceptorInterface
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
