<?php

namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magebit\Faq\Model\FaqFactory;
use Magento\Framework\Registry;

class Edit extends Action
{
    public function __construct(
        Context $context,
        protected PageFactory $resultPageFactory,
        protected FaqFactory $faqFactory,
        protected Registry $coreRegistry
    ) {
        parent::__construct($context);
    }

    public function execute(): \Magento\Backend\Model\View\Result\Page
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->faqFactory->create();

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This FAQ no longer exists.'));
                return $this->resultRedirectFactory->create()->setPath('*/*/');
            }
        }

        $this->coreRegistry->register('faq_question', $model);

        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magebit_Faq::faq');
        $resultPage->getConfig()->getTitle()->prepend(__('Edit Question'));

        return $resultPage;
    }
}
