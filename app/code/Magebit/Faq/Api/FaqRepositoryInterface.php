<?php

namespace Magebit\Faq\Api;

use Magebit\Faq\Api\Data\FaqInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;

interface FaqRepositoryInterface
{
    /**
     * Get FAQ by ID
     *
     * @param int $id
     * @return FaqInterface
     */
    public function getById($id): FaqInterface;

    /**
     * Save FAQ
     *
     * @param FaqInterface $faq
     * @return FaqInterface
     */
    public function save(FaqInterface $faq): FaqInterface;

    /**
     * Delete FAQ
     *
     * @param FaqInterface $faq
     * @return bool
     */
    public function delete(FaqInterface $faq): bool;

    /**
     * Delete FAQ by ID
     *
     * @param int $id
     * @return bool
     */
    public function deleteById($id): bool;

    /**
     * Get list of FAQs
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResultsInterface;
}
