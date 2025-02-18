<?php
namespace Mollie\Payment\Block\Adminhtml\System\Config\Form\Compatibility\Result;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Adminhtml\System\Config\Form\Compatibility\Result
 */
class Interceptor extends \Mollie\Payment\Block\Adminhtml\System\Config\Form\Compatibility\Result implements \Magento\Framework\Interception\InterceptorInterface
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
