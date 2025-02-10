<?php

declare(strict_types=1);

namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;
use Magebit\Faq\Api\FaqRepositoryInterface;
use Magebit\Faq\Api\Data\FaqInterfaceFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;

class Save extends Action
{
    public function __construct(
        Context $context,
        protected FaqRepositoryInterface $faqRepository,
        protected FaqInterfaceFactory $faqFactory,
        protected EventManager $eventManager,
    ) {
        parent::__construct($context);
    }

    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        try {
            $resultRedirect = $this->resultRedirectFactory->create();

            // Get data from the form
            $postData = $this->getRequest()->getParam('general');
            if (!$postData) {
                throw new LocalizedException(__('No data received.'));
            }

            // Check if there is faqId in the POST data
            $faqId = isset($postData['id']) ? (int)$postData['id'] : null;

            // If faqId exists, load the existing FAQ; otherwise, create a new one.
            $faq = $faqId ? $this->faqRepository->getById($faqId) : $this->faqFactory->create();

            // For new records, ensure no ID is set so Magento performs an INSERT.
            if (!$faqId) {
                $faq->setId(null);
                $faq->isObjectNew(true);
            }

            $position = isset($postData['position']) ? (int)$postData['position'] : 0;

            // Set the FAQ properties
            $faq->setQuestion($postData['question']);
            $faq->setAnswer($postData['answer']);
            $faq->setStatus((int)$postData['status']);
            $faq->setPosition($position);

            // Save the FAQ. After saving, Magento should update the model with the new ID.
            $this->faqRepository->save($faq);
            // Success message
            $this->messageManager->addSuccessMessage(__('The FAQ has been saved successfully.'));

            // Redirect logic based on whether the "back" parameter is set
            if ($this->getRequest()->getParam('back')) {
                return $resultRedirect->setPath('*/index/');
            }
            return $resultRedirect->setPath('*/faq/edit/id/' . $faq->getId());
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('An error occurred while saving the FAQ. %1', $e->getMessage()));
        }

        // If there's an error, redirect back to the FAQ index page
        return $resultRedirect->setPath('*/index/');
    }
}
