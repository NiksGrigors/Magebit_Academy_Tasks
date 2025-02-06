<?php

declare(strict_types=1);

namespace Magebit\Faq\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\UrlInterface;

class FaqActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    private const URL_PATH_EDIT = 'faq/faq/edit';
    private const URL_PATH_DELETE = 'faq/faq/delete';

    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        private UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['id'])) {
                    $name = $this->getData('name');

                    $item[$name]['edit'] = [
                        'href' => $this->getEditUrl($item),
                        'label' => __('Edit')
                    ];

                    $item[$name]['delete'] = [
                        'href' => $this->getDeleteUrl($item),
                        'label' => __('Delete'),
                        'confirm' => [
                            'title' => __('Delete FAQ'),
                            'message' => __('Are you sure you want to delete this FAQ?')
                        ]
                    ];
                }
            }
        }
        return $dataSource;
    }

    private function getEditUrl(array $item): string
    {
        return $this->urlBuilder->getUrl(self::URL_PATH_EDIT, ['id' => $item['id']]);
    }

    private function getDeleteUrl(array $item): string
    {
        return $this->urlBuilder->getUrl(self::URL_PATH_DELETE, ['id' => $item['id']]);
    }
}
