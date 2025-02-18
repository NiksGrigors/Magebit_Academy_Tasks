<?php
namespace Hyva\Checkout\Block\Adminhtml\System\Config\HyvaThemesCheckout;

/**
 * Interceptor class for @see \Hyva\Checkout\Block\Adminhtml\System\Config\HyvaThemesCheckout
 */
class Interceptor extends \Hyva\Checkout\Block\Adminhtml\System\Config\HyvaThemesCheckout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Metadata\AddressMetadata $addressMetadata, \Magento\Customer\Model\Metadata\CustomerMetadata $customerMetadata, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $addressMetadata, $customerMetadata, $data);
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
