<?php

declare(strict_types=1);

namespace Magebit\Faq\Api;

use Magebit\Faq\Api\Data\FaqInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Data\Collection;

interface FaqRepositoryInterface
{
    /**
     * @param int $id
     * @return FaqInterface
     */
    public function getById(int $id): FaqInterface;

    /**
     * @param FaqInterface $faq
     *
     */
    public function save(FaqInterface $faq);

    /**
     * @param FaqInterface $faq
     * @return bool
     */
    public function delete(FaqInterface $faq): bool;

    /**
     * @param int $id
     * @return bool
     */
    public function deleteById(int $id): bool;

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResultsInterface;

    /**
     * @return Collection
     */
    public function getFaqCollection(): Collection;
}
