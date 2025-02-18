<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid\Renderer\Qty;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid\Renderer\Qty
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid\Renderer\Qty implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Catalog\Model\ProductTypes\ConfigInterface $typeConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $typeConfig, $data);
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
