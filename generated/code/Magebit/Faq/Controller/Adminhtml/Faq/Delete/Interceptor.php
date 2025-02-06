<?php
namespace Magebit\Faq\Controller\Adminhtml\Faq\Delete;

/**
 * Interceptor class for @see \Magebit\Faq\Controller\Adminhtml\Faq\Delete
 */
class Interceptor extends \Magebit\Faq\Controller\Adminhtml\Faq\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magebit\Faq\Model\FaqFactory $faqFactory)
    {
        $this->___init();
        parent::__construct($context, $faqFactory);
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
