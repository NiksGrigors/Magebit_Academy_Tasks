<?php
namespace Magebit\Faq\Ui\Component\Listing;

use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * @return array[]
     */
    public function getData(): array
    {
        $result = [];
        foreach ($this->collection->getItems() as $item) {
            $result[] = $item->getData();
        }

        return ['items' => $result];
    }

}
