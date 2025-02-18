<?php
namespace Mollie\Payment\Block\Adminhtml\System\Config\Button\DebugCheck;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Adminhtml\System\Config\Button\DebugCheck
 */
class Interceptor extends \Mollie\Payment\Block\Adminhtml\System\Config\Button\DebugCheck implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
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
