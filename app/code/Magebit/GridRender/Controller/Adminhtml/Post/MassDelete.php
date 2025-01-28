<?php

namespace Magebit\GridRender\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Ui\Component\MassAction\Filter;
use Magebit\GridRender\Model\ResourceModel\Post\CollectionFactory;
use Psr\Log\LoggerInterface;


class MassDelete extends Action
{
    public function __construct(
        Action\Context $context,
        protected Filter $filter,
        protected CollectionFactory $collectionFactory,
        protected LoggerInterface $logger
    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->collectionFactory->create();

        $productDeleted = 0;
        $productDeletedError = 0;
        /** @var \Magento\Catalog\Model\Product $product */
        foreach ($collection->getItems() as $product) {
            try {
                $product->delete();
                $productDeleted++;
            } catch (LocalizedException $exception) {
                $this->logger->error($exception->getLogMessage());
                $productDeletedError++;
            }
        }

        if ($productDeleted) {
            $this->messageManager->addSuccessMessage(
                __('A total of %1 record(s) have been deleted.', $productDeleted)
            );
        }

        if ($productDeletedError) {
            $this->messageManager->addErrorMessage(
                __(
                    'A total of %1 record(s) haven\'t been deleted. Please see server logs for more details.',
                    $productDeletedError
                )
            );
        }

        return $this->_redirect('*/*/');
    }
}
