<?php
namespace Mollie\Payment\Block\Info\Paymentlink;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Info\Paymentlink
 */
class Interceptor extends \Mollie\Payment\Block\Info\Paymentlink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Mollie\Payment\Config $config, \Mollie\Payment\Helper\General $mollieHelper, \Magento\Framework\Registry $registry, \Magento\Framework\Pricing\PriceCurrencyInterface $price, \Mollie\Payment\Service\Magento\PaymentLinkUrl $paymentLinkUrl)
    {
        $this->___init();
        parent::__construct($context, $config, $mollieHelper, $registry, $price, $paymentLinkUrl);
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
