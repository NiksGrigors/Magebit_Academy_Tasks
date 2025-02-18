<?php
namespace Magento\PaymentServicesPaypal\Block\SmartButtons\Review\Details;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\SmartButtons\Review\Details
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\SmartButtons\Review\Details implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\ConfigInterface $salesConfig, \Magento\PaymentServicesPaypal\Model\SmartButtons\Checkout $checkout, array $data = [], array $layoutProcessors = [])
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $salesConfig, $checkout, $data, $layoutProcessors);
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
