<?php

declare(strict_types=1);

namespace Magebit\Faq\Model\ResourceModel\Faq;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magebit\Faq\Model\Faq as FaqModel;
use Magebit\Faq\Model\ResourceModel\Faq as FaqResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(FaqModel::class, FaqResourceModel::class);
    }
}

