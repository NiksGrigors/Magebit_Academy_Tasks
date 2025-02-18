<?php
namespace Mollie\Payment\Block\Product\View\ApplePay;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Product\View\ApplePay
 */
class Interceptor extends \Mollie\Payment\Block\Product\View\ApplePay implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Mollie\Payment\Config $config, \Mollie\Payment\Service\Mollie\ApplePay\SupportedNetworks $supportedNetworks, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $supportedNetworks, $data);
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
