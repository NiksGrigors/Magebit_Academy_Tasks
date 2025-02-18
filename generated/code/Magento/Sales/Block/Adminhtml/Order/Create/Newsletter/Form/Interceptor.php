<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Newsletter\Form;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Newsletter\Form
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Newsletter\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null, ?\Magento\Directory\Helper\Data $directoryHelper = null)
    {
        $this->___init();
        parent::__construct($context, $data, $jsonHelper, $directoryHelper);
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
