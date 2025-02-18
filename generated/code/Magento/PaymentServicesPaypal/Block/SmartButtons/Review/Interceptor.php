<?php
namespace Magento\PaymentServicesPaypal\Block\SmartButtons\Review;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\SmartButtons\Review
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\SmartButtons\Review implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Tax\Helper\Data $taxHelper, \Magento\Customer\Model\Address\Config $addressConfig, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Checkout\Model\Session $checkoutSession, \Magento\PaymentServicesPaypal\Model\SmartButtons\Checkout $checkout, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $taxHelper, $addressConfig, $priceCurrency, $checkoutSession, $checkout, $data);
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
