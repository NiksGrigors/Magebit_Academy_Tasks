<?php
namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;
use Magento\Framework\Controller\ResultFactory;

class MassDisable extends \Magento\Backend\App\Action
{
    public function __construct(
        Context $context,
        protected Filter $filter,
        protected CollectionFactory $collectionFactory
    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $collectionSize = $collection->getSize();

        foreach ($collection as $item) {
            $item->setStatus(false);
            $item->save();
        }

        $this->messageManager->addSuccess(__('A total of %1 element(s) have been disabled.', $collectionSize));

        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/index/');
    }
}
