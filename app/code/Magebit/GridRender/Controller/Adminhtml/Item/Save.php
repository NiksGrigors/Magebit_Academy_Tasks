<?php

namespace Magebit\GridRender\Controller\Adminhtml\Item;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use Magebit\GridRender\Model\PostFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;

class Save extends Action
{
    public function __construct(
        Context $context,
        private PostFactory $postFactory,
        private EventManager $eventManager
    ) {
        parent::__construct($context);
    }

    public function execute(): ResultInterface
    {
        try {
            $postData = $this->getRequest()->getPostValue()['general'];

            $post = $this->postFactory->create();
            $post->setData($postData)
                ->save();

            // Event call when new post have been saved
            $this->eventManager->dispatch(
                'magebit_gridrender_post_save_after',
                ['post' => $post, 'post_data' => $postData]
            );

            $this->messageManager->addSuccessMessage(__('Post has been saved successfully.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('An error occurred while saving the post: %1', $e->getMessage()));
        }

        return $this->resultRedirectFactory->create()->setPath('magebit_gridrender/post/index');
    }
}
