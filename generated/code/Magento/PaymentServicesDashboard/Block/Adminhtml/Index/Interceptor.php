<?php
namespace Magento\PaymentServicesDashboard\Block\Adminhtml\Index;

/**
 * Interceptor class for @see \Magento\PaymentServicesDashboard\Block\Adminhtml\Index
 */
class Interceptor extends \Magento\PaymentServicesDashboard\Block\Adminhtml\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PaymentServicesBase\Model\Config $config, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Magento\PaymentServicesPaypal\Model\Config $paymentsConfig, \Magento\Backend\Model\Auth\Session $adminSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $timezone, $paymentsConfig, $adminSession, $data);
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
