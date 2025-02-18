<?php
namespace Mollie\Payment\Block\Customer\CardRenderer;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Customer\CardRenderer
 */
class Interceptor extends \Mollie\Payment\Block\Customer\CardRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\View\Asset\Repository $assetRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $assetRepository, $data);
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
