<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Attributes\Create;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Attributes\Create
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Attributes\Create implements \Magento\Framework\Interception\InterceptorInterface
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
