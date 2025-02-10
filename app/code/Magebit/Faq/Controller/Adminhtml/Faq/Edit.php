<?php

declare(strict_types=1);

namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magebit\Faq\Api\FaqRepositoryInterface;
use Magento\Framework\Registry;

class Edit extends Action
{
    public function __construct(
        Context $context,
        protected PageFactory $resultPageFactory,
        protected FaqRepositoryInterface $faqRepository,
        protected Registry $coreRegistry
    ) {
        parent::__construct($context);
    }

    /**
     * @return Page
     */
    public function execute(): Page
    {
        $id = (int)$this->getRequest()->getParam('id');
        $model = null;

        if ($id) {
            $model = $this->faqRepository->getById($id);
        }

        $this->coreRegistry->register('faq_question', $model);

        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magebit_Faq::faq');
        $resultPage->getConfig()->getTitle()->prepend(__('Edit Question'));

        return $resultPage;
    }
}
