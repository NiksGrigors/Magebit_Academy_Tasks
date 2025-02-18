<?php
namespace Mollie\Payment\Block\PaymentFee\Sales\CreditmemoNew;

/**
 * Interceptor class for @see \Mollie\Payment\Block\PaymentFee\Sales\CreditmemoNew
 */
class Interceptor extends \Mollie\Payment\Block\PaymentFee\Sales\CreditmemoNew implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Mollie\Payment\Service\Order\Creditmemo $creditmemoService, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $creditmemoService, $data);
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
