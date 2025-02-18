<?php
namespace Magento\Directory\Block\Adminhtml\Frontend\Region\Updater;

/**
 * Interceptor class for @see \Magento\Directory\Block\Adminhtml\Frontend\Region\Updater
 */
class Interceptor extends \Magento\Directory\Block\Adminhtml\Frontend\Region\Updater implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Directory\Helper\Data $directoryHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $directoryHelper, $data);
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
