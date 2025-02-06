<?php
namespace Magebit\Faq\Controller\Adminhtml\Faq\MassDisable;

/**
 * Interceptor class for @see \Magebit\Faq\Controller\Adminhtml\Faq\MassDisable
 */
class Interceptor extends \Magebit\Faq\Controller\Adminhtml\Faq\MassDisable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory $collectionFactory, \Magebit\Faq\Api\FaqManagementInterface $faqManagement)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $faqManagement);
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
