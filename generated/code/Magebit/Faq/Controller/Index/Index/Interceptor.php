<?php
namespace Magebit\Faq\Controller\Index\Index;

/**
 * Interceptor class for @see \Magebit\Faq\Controller\Index\Index
 */
class Interceptor extends \Magebit\Faq\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory $faqCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $faqCollectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\View\Result\Page
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
