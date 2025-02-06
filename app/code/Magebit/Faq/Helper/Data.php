<?php
namespace Magebit\Faq\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;

class Data extends AbstractHelper
{

    public function __construct(protected CollectionFactory $faqCollectionFactory){}

    public function getFaqCollection(): \Magebit\Faq\Model\ResourceModel\Faq\Collection
    {
        return $this->faqCollectionFactory
            ->create()
            ->setOrder('position', 'ASC')
            ->addFieldToFilter('status', 1);
    }
}
