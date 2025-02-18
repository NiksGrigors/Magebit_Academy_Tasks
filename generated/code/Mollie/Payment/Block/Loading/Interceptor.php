<?php
namespace Mollie\Payment\Block\Loading;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Loading
 */
class Interceptor extends \Mollie\Payment\Block\Loading implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Mollie\Payment\Helper\General $mollieHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $mollieHelper, $data);
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
