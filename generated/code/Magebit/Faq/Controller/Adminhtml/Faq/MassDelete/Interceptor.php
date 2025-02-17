<?php
namespace Magebit\Faq\Controller\Adminhtml\Faq\MassDelete;

/**
 * Interceptor class for @see \Magebit\Faq\Controller\Adminhtml\Faq\MassDelete
 */
class Interceptor extends \Magebit\Faq\Controller\Adminhtml\Faq\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory $collectionFactory, \Magebit\Faq\Api\FaqRepositoryInterface $faqRepository)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $faqRepository);
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
