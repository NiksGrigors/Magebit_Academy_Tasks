<?php

namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;
use Magebit\Faq\Api\FaqManagementInterface;
use Magento\Framework\Controller\ResultFactory;

class MassDisable extends \Magento\Backend\App\Action
{
    public function __construct(
        Context $context,
        protected Filter $filter,
        protected CollectionFactory $collectionFactory,
        protected FaqManagementInterface $faqManagement
    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $collectionSize = $collection->getSize();

        foreach ($collection as $item) {
            $this->faqManagement->disableQuestion($item->getId()); // Use the FaqManagement service
        }

        $this->messageManager->addSuccess(__('A total of %1 element(s) have been disabled.', $collectionSize));

        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/index/');
    }
}

