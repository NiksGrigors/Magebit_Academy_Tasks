<?php
namespace PayPal\Braintree\Block\Credit\Calculator\Listing\Product;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\Credit\Calculator\Listing\Product
 */
class Interceptor extends \PayPal\Braintree\Block\Credit\Calculator\Listing\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \PayPal\Braintree\Gateway\Config\PayPalCredit\Config $config, \PayPal\Braintree\Api\CreditPriceRepositoryInterface $creditPriceRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $creditPriceRepository, $data);
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
