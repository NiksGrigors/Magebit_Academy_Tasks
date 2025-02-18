<?php
namespace Magento\Backend\Block\Dashboard;

/**
 * Interceptor class for @see \Magento\Backend\Block\Dashboard
 */
class Interceptor extends \Magento\Backend\Block\Dashboard implements \Magento\Framework\Interception\InterceptorInterface
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
