<?php

namespace Magebit\Faq\Model;

use Magebit\Faq\Api\Data\FaqInterfaceFactory;
use Magebit\Faq\Api\Data\FaqInterface;
use Magebit\Faq\Model\ResourceModel\Faq as FaqResource;
use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;

class FaqRepository implements \Magebit\Faq\Api\FaqRepositoryInterface
{
    public function __construct(
        protected FaqResource $resource,
        protected FaqInterfaceFactory $faqFactory,
        protected CollectionFactory $collectionFactory,
        protected SearchResultsInterfaceFactory $searchResultsFactory
    ) {}


    public function getById($id): FaqInterface
    {
        $faq = $this->faqFactory->create();
        $this->resource->load($faq, $id);

        if (!$faq->getId()) {
            throw new NoSuchEntityException(__('FAQ with ID "%1" not found.', $id));
        }

        return $faq;
    }


    public function save(FaqInterface $faq): FaqInterface
    {
        try {
            $faqModel = $this->faqFactory->create();
            $faqModel->setData($faq->getData());
            $this->resource->save($faqModel);
            return $faqModel;
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__('Could not save the FAQ: %1', $e->getMessage()));
        }
    }


    public function delete(FaqInterface $faq): bool
    {
        try {
            $this->resource->delete($faq);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__('Could not delete FAQ: %1', $e->getMessage()));
        }

        return true;
    }


    public function deleteById($id): bool
    {
        return $this->delete($this->getById($id));
    }


    public function getList(SearchCriteriaInterface $searchCriteria): \Magento\Framework\Api\SearchResultsInterface
    {
        $collection = $this->collectionFactory->create();
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setItems($collection->getItems());

        return $searchResults;
    }
}
