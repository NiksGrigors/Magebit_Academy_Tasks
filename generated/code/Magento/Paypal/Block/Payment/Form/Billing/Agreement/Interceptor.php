<?php
namespace Magento\Paypal\Block\Payment\Form\Billing\Agreement;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Payment\Form\Billing\Agreement
 */
class Interceptor extends \Magento\Paypal\Block\Payment\Form\Billing\Agreement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Paypal\Model\Billing\AgreementFactory $agreementFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $agreementFactory, $data);
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
