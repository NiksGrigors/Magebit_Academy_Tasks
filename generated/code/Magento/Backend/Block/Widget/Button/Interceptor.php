<?php
namespace Magento\Backend\Block\Widget\Button;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Button
 */
class Interceptor extends \Magento\Backend\Block\Widget\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\Math\Random $random = null, ?\Magento\Framework\View\Helper\SecureHtmlRenderer $htmlRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $data, $random, $htmlRenderer);
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
