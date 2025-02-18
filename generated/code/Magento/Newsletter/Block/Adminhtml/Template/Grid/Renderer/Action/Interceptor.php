<?php
namespace Magento\Newsletter\Block\Adminhtml\Template\Grid\Renderer\Action;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Template\Grid\Renderer\Action
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Template\Grid\Renderer\Action implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureHtmlRenderer = null, ?\Magento\Framework\Math\Random $random = null)
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data, $secureHtmlRenderer, $random);
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
