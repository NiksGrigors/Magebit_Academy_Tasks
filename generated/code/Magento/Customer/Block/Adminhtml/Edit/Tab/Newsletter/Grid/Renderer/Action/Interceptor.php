<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter\Grid\Renderer\Action;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter\Grid\Renderer\Action
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter\Grid\Renderer\Action implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Registry $registry, array $data = [], ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $data, $escaper);
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
