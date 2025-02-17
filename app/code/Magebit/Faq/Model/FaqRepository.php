<?php

declare(strict_types=1);

namespace Magebit\Faq\Model;

use Magebit\Faq\Api\Data\FaqInterfaceFactory;
use Magebit\Faq\Api\Data\FaqInterface;
use Magebit\Faq\Api\FaqRepositoryInterface;
use Magebit\Faq\Model\ResourceModel\Faq as FaqResource;
use Magebit\Faq\Model\ResourceModel\Faq\Collection;
use Magebit\Faq\Model\ResourceModel\Faq\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;

class FaqRepository implements FaqRepositoryInterface
{
    public function __construct(
        protected FaqResource $resource,
        protected FaqInterfaceFactory $faqFactory,
        protected CollectionFactory $collectionFactory,
        protected SearchResultsInterfaceFactory $searchResultsFactory
    ) {}

    /**
     * @param int $id
     * @return FaqInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $id): FaqInterface
    {
        $faq = $this->faqFactory->create();
        $this->resource->load($faq, $id);

        if (!$faq->getId()) {
            throw new NoSuchEntityException(__('FAQ with ID "%1" not found.', $id));
        }

        return $faq;
    }

    /**
     * @param FaqInterface $faq
     * @return FaqInterface
     * @throws CouldNotSaveException
     */
    public function save(FaqInterface $faq): FaqInterface
    {
        try {
            $this->resource->save($faq);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__('Could not save the FAQ: %1', $e->getMessage()));
        }

        return $faq;
    }

    /**
     * @param FaqInterface $faq
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(FaqInterface $faq): bool
    {
        try {
            $this->resource->delete($faq);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__('Could not delete FAQ: %1', $e->getMessage()));
        }

        return true;
    }

    /**
     * @param int $id
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $id): bool
    {
        return $this->delete($this->getById($id));
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResultsInterface
    {
        $collection = $this->collectionFactory->create();
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }

    /**
     * @return Collection
     */
    public function getFaqCollection(): Collection
    {
        return $this->collectionFactory
            ->create()
            ->setOrder('position', 'ASC')
            ->addFieldToFilter('status', 1);
    }
}
