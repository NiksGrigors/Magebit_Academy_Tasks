<?php
namespace Mollie\Payment\Block\Checkout\CheckoutConfig;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Checkout\CheckoutConfig
 */
class Interceptor extends \Mollie\Payment\Block\Checkout\CheckoutConfig implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Mollie\Payment\Config $config, \Magento\Checkout\Model\Session $checkoutSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $checkoutSession, $data);
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
