<?php
namespace Magento\Tax\Block\Adminhtml\Rate\Grid\Renderer\Data;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Rate\Grid\Renderer\Data
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Rate\Grid\Renderer\Data implements \Magento\Framework\Interception\InterceptorInterface
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
