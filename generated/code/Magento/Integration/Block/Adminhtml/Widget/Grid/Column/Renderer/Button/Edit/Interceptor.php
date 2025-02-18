<?php
namespace Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Button\Edit;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Button\Edit
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Button\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null, ?\Magento\Framework\Math\Random $random = null)
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
