<?php
namespace Magebit\GridRender\Controller\Adminhtml\Item;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class NewAction extends Action
{
    public function execute(): Page
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Magebit_GridRender::post');
        $resultPage->getConfig()->getTitle()->prepend(__('Add New Post'));

        return $resultPage;
    }
}
