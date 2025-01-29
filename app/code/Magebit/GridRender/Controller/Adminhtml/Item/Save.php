<?php

namespace Magebit\GridRender\Controller\Adminhtml\Item;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use Magebit\GridRender\Model\PostFactory;

class Save extends Action
{
    private PostFactory $postFactory;

    public function __construct(
        Context $context,
        PostFactory $postFactory
    ) {
        parent::__construct($context);
        $this->postFactory = $postFactory;
    }

    public function execute(): ResultInterface
    {
        try {
            $postData = $this->getRequest()->getPostValue()['general'];

            $post = $this->postFactory->create();
            $post->setData($postData)
                ->save();

            $this->messageManager->addSuccessMessage(__('Post has been saved successfully.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('An error occurred while saving the post: %1', $e->getMessage()));
        }

        return $this->resultRedirectFactory->create()->setPath('magebit_gridrender/post/index');
    }
}
