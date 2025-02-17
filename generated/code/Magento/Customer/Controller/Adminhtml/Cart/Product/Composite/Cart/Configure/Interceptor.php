<?php
namespace Magento\Customer\Controller\Adminhtml\Cart\Product\Composite\Cart\Configure;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Adminhtml\Cart\Product\Composite\Cart\Configure
 */
class Interceptor extends \Magento\Customer\Controller\Adminhtml\Cart\Product\Composite\Cart\Configure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\Quote\Model\ResourceModel\QuoteItemRetriever $quoteItemRetriever, \Magento\Framework\AuthorizationInterface $authorization)
    {
        $this->___init();
        parent::__construct($context, $quoteRepository, $quoteFactory, $quoteItemRetriever, $authorization);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
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
