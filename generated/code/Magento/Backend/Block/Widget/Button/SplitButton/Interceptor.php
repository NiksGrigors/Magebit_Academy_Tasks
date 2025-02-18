<?php
namespace Magento\Backend\Block\Widget\Button\SplitButton;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Button\SplitButton
 */
class Interceptor extends \Magento\Backend\Block\Widget\Button\SplitButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null, ?\Magento\Framework\Math\Random $random = null)
    {
        $this->___init();
        parent::__construct($context, $data, $secureRenderer, $random);
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
