<?php

declare(strict_types=1);

namespace Magebit\GridRender\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Index extends Action implements HttpGetActionInterface
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE); //creates new page
        $resultPage->setActiveMenu('Magebit_GridRender::post'); //sets the active menu in admin panel
        $resultPage->getConfig()->getTitle()->prepend(__('Grid Render')); //sets title
        return $resultPage;
    }

}
