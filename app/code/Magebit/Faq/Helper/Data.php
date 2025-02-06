<?php
namespace Magebit\Faq\Helper;

use Magebit\Faq\Model\ResourceModel\Faq\Collection;
use Magento\Framework\App\Helper\AbstractHelper;
use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;

class Data extends AbstractHelper
{

    public function __construct(protected CollectionFactory $faqCollectionFactory){}

    /**
     * @return Collection
     */
    public function getFaqCollection(): Collection
    {
        return $this->faqCollectionFactory
            ->create()
            ->setOrder('position', 'ASC')
            ->addFieldToFilter('status', 1);
    }
}
