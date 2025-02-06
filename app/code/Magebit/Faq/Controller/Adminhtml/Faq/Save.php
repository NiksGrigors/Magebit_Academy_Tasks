<?php

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
        protected EventManager $eventManager
    ) {
        parent::__construct($context);
    }

    public function execute(): ResultInterface
    {
        $resultRedirect = $this->resultRedirectFactory->create();

        try {
            //get data from the form
            $postData = $this->getRequest()->getPostValue();
            if (!$postData) {
                throw new LocalizedException(__('No data received.'));
            }

            //Check if there is faqId
            $faqId = isset($postData['general']['id']) ? (int) $postData['general']['id'] : null;

            // If id, get existing faq, otherwise create a new faq
            $faq = $faqId ? $this->faqRepository->getById($faqId) : $this->faqFactory->create();

            // Set the faq properties
            $faq->setQuestion($postData['general']['question']);
            $faq->setAnswer($postData['general']['answer']);
            $faq->setStatus($postData['general']['status']);
            $faq->setPosition(isset($postData['general']['position']) ? $postData['general']['position'] : 0);

            // Save the faq
            $savedFaq = $this->faqRepository->save($faq);

            // Success message
            $this->messageManager->addSuccessMessage(__('The FAQ has been saved successfully.'));

            // If presses Save & Close button
            $backParam = $this->getRequest()->getParam('back');
            if ($backParam) {
                return $this->resultRedirectFactory->create()->setPath('*/index/');
            }

            //If presses save button
            return $this->resultRedirectFactory->create()->setPath('*/faq/edit/id/' . $savedFaq->getId());

        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('An error occurred while saving the FAQ.'));
        }

        // If there's an error, redirect back to the faq index page
        return $resultRedirect->setPath('*/index/');
    }
}
