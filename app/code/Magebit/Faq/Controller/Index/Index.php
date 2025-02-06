<?php
namespace Magebit\Faq\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        Context $context,
        protected PageFactory $pageFactory,
        protected CollectionFactory $faqCollectionFactory
    ) {
        parent::__construct($context);
    }

    public function execute(): \Magento\Framework\View\Result\Page
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Frequently Asked Questions'));
        return $resultPage;
    }
}
