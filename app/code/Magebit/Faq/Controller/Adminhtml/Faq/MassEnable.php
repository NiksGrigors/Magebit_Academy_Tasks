<?php

declare(strict_types=1);

namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magebit\Faq\Api\FaqRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Ui\Component\MassAction\Filter;
use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;
use Magebit\Faq\Api\FaqManagementInterface;
use Magento\Framework\Controller\ResultFactory;

class MassEnable extends Action
{
    public function __construct(
        Context $context,
        protected Filter $filter,
        protected CollectionFactory $collectionFactory,
        protected FaqManagementInterface $faqManagement,
        protected FaqRepositoryInterface $faqRepository
    ) {
        parent::__construct($context);
    }

    /**
     * @return ResultInterface
     * @throws LocalizedException
     */
    public function execute(): ResultInterface
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $collectionSize = $collection->getSize();

        foreach ($collection as $item) {
            $this->faqManagement->enableQuestion($item->getId());
        }

        $this->messageManager->addSuccess(__('A total of %1 element(s) have been enabled.', $collectionSize));

        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/index/');
    }
}


