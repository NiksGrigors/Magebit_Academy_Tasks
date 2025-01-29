<?php

namespace Magebit\GridRender\Ui;

use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        $collectionFactory,
        protected $collection,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }

    public function getData(): array
    {
        $result = [];

        foreach ($this->collection->getItems() as $item) {
            $result[$item->getId()]['general'] = $item->getData();
        }

        return $result ?: [];
    }
}
