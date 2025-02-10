<?php
namespace Magebit\Faq\Controller\Adminhtml\Faq\InlineEdit;

/**
 * Interceptor class for @see \Magebit\Faq\Controller\Adminhtml\Faq\InlineEdit
 */
class Interceptor extends \Magebit\Faq\Controller\Adminhtml\Faq\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magebit\Faq\Api\FaqRepositoryInterface $faqRepository)
    {
        $this->___init();
        parent::__construct($context, $faqRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\Result\Json
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
