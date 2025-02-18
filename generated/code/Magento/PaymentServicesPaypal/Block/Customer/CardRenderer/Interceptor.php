<?php
namespace Magento\PaymentServicesPaypal\Block\Customer\CardRenderer;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\Customer\CardRenderer
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\Customer\CardRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Model\CcConfigProvider $iconsProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $iconsProvider, $data);
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
