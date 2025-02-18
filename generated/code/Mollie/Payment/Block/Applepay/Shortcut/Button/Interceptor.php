<?php
namespace Mollie\Payment\Block\Applepay\Shortcut\Button;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Applepay\Shortcut\Button
 */
class Interceptor extends \Mollie\Payment\Block\Applepay\Shortcut\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Mollie\Payment\Config $config, \Mollie\Payment\Service\Mollie\ApplePay\SupportedNetworks $supportedNetworks, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $config, $supportedNetworks, $data);
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
