<?php
namespace Hyva\Checkout\Controller\Index\Index;

/**
 * Interceptor class for @see \Hyva\Checkout\Controller\Index\Index
 */
class Interceptor extends \Hyva\Checkout\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Session $sessionCheckout, \Magento\Customer\Model\Session $sessionCustomer, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Hyva\Checkout\Model\Session $sessionCheckoutConfig, \Hyva\Checkout\Model\Config $hyvaCheckoutConfig, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Hyva\Checkout\Model\Layout $layoutHyvaCheckout, \Psr\Log\LoggerInterface $logger, \Hyva\Checkout\Model\ConfigData\HyvaThemes\Checkout $systemCheckoutConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Hyva\Checkout\Model\Navigation\Navigator $navigator = null)
    {
        $this->___init();
        parent::__construct($context, $sessionCheckout, $sessionCustomer, $customerRepository, $accountManagement, $sessionCheckoutConfig, $hyvaCheckoutConfig, $pageFactory, $quoteRepository, $layoutHyvaCheckout, $logger, $systemCheckoutConfig, $storeManager, $navigator);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
