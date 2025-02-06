<?php

declare(strict_types=1);

namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magebit\Faq\Model\FaqFactory;
use Magento\Framework\Controller\ResultInterface;

class Delete extends Action
{
    public function __construct(
        Context $context,
        protected FaqFactory $faqFactory
    ) {
        parent::__construct($context);
    }

    public function execute(): ResultInterface
    {
        $faqId = (int) $this->getRequest()->getParam('id');

        if (!$faqId) {
            $this->messageManager->addErrorMessage(__('FAQ ID is not provided.'));
            return $this->resultRedirectFactory->create()->setPath('*/index/index');
        }

        try {
            $faq = $this->faqFactory->create()->load($faqId);

            if (!$faq->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(__('The FAQ does not exist.'));
            }

            $faq->delete();

            $this->messageManager->addSuccessMessage(__('FAQ has been successfully deleted.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Error deleting FAQ: %1', $e->getMessage()));
        }

        //back to FAQ list page
        return $this->resultRedirectFactory->create()->setPath('*/index/index');
    }
}
