<?php
namespace Magento\Sales\Block\Adminhtml\Order\View\Tab\Invoices;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\View\Tab\Invoices
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\View\Tab\Invoices implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, array $data = [], ?\Magento\Framework\AuthorizationInterface $authorization = null)
    {
        $this->___init();
        parent::__construct($context, $data, $authorization);
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
