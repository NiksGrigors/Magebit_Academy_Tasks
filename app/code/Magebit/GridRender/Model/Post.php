<?php

declare(strict_types=1);

namespace Magebit\GridRender\Model;

use Magento\Framework\Model\AbstractModel;
use Magebit\GridRender\Model\ResourceModel\Post as ResourceModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        //links post model to the post resource model
        $this->_init(ResourceModel::class);
    }
}
