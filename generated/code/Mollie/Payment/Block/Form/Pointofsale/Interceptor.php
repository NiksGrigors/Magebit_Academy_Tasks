<?php
namespace Mollie\Payment\Block\Form\Pointofsale;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Form\Pointofsale
 */
class Interceptor extends \Mollie\Payment\Block\Form\Pointofsale implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Mollie\Payment\Service\Mollie\AvailableTerminals $availableTerminals, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $availableTerminals, $data);
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
