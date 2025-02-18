<?php
namespace Magento\PaymentServicesPaypal\Block\Adminhtml\Form\AdminVault;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\Adminhtml\Form\AdminVault
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\Adminhtml\Form\AdminVault implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
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
