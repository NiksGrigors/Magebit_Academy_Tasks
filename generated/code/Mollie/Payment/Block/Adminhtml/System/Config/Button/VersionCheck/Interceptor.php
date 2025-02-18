<?php
namespace Mollie\Payment\Block\Adminhtml\System\Config\Button\VersionCheck;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Adminhtml\System\Config\Button\VersionCheck
 */
class Interceptor extends \Mollie\Payment\Block\Adminhtml\System\Config\Button\VersionCheck implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Mollie\Payment\Config $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $data);
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
