<?php

namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;
use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use Magento\Ui\Component\MassAction\Filter;
use Magebit\Faq\Api\FaqRepositoryInterface;

class MassDelete extends Action implements HttpPostActionInterface
{
    public function __construct(
        Context $context,
        protected Filter $filter,
        protected CollectionFactory $collectionFactory,
        protected FaqRepositoryInterface $faqRepository
    ) {
        parent::__construct($context);
    }

    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        try {
            $selected = $this->getRequest()->getParam('selected');
            $excluded = $this->getRequest()->getParam('excluded');

            $collection = $this->collectionFactory->create();

            if (is_array($excluded) && !empty($excluded)) {
                $collection->addFieldToFilter('id', ['nin' => $excluded]);
            } elseif(is_array($selected) && !empty($selected)) {
                $collection->addFieldToFilter('id', ['in' => $selected]);
            }

            $deleteCounter = 0;
            foreach ($collection as $faq) {
                $this->faqRepository->delete($faq);
                $deleteCounter++;
            }

            $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been deleted.', $deleteCounter));

            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            return $resultRedirect->setPath('*/index/');
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Error occurred: %1', $e->getMessage()));
        }
    }
}
