<?php

namespace Magebit\GridRender\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Ui\Component\MassAction\Filter;
use Magebit\GridRender\Model\ResourceModel\Post\CollectionFactory;

class MassDelete extends Action
{
    protected $filter;
    protected $collectionFactory;

    public function __construct(
        Action\Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $deleted = 0;

        foreach ($collection as $item) {
            $item->delete();
            $deleted++;
        }

        $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been deleted.', $deleted));
        return $this->_redirect('*/*/');
    }
}
