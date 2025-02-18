<?php
namespace Magento\InstantPurchase\Block\Button;

/**
 * Interceptor class for @see \Magento\InstantPurchase\Block\Button
 */
class Interceptor extends \Magento\InstantPurchase\Block\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\InstantPurchase\Model\Config $instantPurchaseConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $instantPurchaseConfig, $data);
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
