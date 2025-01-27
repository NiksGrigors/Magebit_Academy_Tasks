<?php

declare(strict_types=1);

namespace Magebit\GridRender\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    private const TABLE_NAME = 'magebit_post';
    private const PRIMARY_KEY = 'entity_id';

    protected function _construct()
    {
        //mapping for the resource model to interact with DB
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }
}
