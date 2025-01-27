<?php

declare(strict_types=1);

namespace Magebit\GridRender\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magebit\GridRender\Model\Post;
use Magebit\GridRender\Model\ResourceModel\Post as PostResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}
