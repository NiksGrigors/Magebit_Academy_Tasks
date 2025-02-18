<?php
namespace Magento\PaymentServicesPaypal\Block\SmartButtonsProduct;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\SmartButtonsProduct
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\SmartButtonsProduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PaymentServicesPaypal\Model\Config $config, \Magento\Checkout\Model\Session $session, \Magento\Catalog\Helper\Data $catalogData, string $pageType = 'minicart', array $componentConfig = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $session, $catalogData, $pageType, $componentConfig, $data);
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
