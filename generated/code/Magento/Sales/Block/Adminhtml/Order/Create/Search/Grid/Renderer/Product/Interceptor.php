<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid\Renderer\Product;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid\Renderer\Product
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid\Renderer\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
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
