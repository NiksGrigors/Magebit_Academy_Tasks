<?php
namespace Magento\Sales\Block\Adminhtml\ShoppingCartsTab;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\ShoppingCartsTab
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\ShoppingCartsTab implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Customer\Model\CustomerIdProvider $customerIdProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $customerIdProvider, $data);
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
