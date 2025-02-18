<?php
namespace Magento\Reports\Block\Adminhtml\Product\Downloads\Renderer\Purchases;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Product\Downloads\Renderer\Purchases
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Product\Downloads\Renderer\Purchases implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
