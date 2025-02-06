<?php
namespace Magebit\Faq\Controller\Adminhtml\Faq\Edit;

/**
 * Interceptor class for @see \Magebit\Faq\Controller\Adminhtml\Faq\Edit
 */
class Interceptor extends \Magebit\Faq\Controller\Adminhtml\Faq\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magebit\Faq\Model\FaqFactory $faqFactory, \Magento\Framework\Registry $coreRegistry)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $faqFactory, $coreRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Backend\Model\View\Result\Page
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
