<?php

namespace Magebit\Faq\Model\ResourceModel\Faq\Grid;

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Api\Search\AggregationInterface;
use Magebit\Faq\Model\ResourceModel\Faq\Collection as FaqCollection;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\View\Element\UiComponent\DataProvider\Document;

class Collection extends FaqCollection implements SearchResultInterface
{
    /**
     * @var AggregationInterface
     */
    protected $aggregations;


    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        private $mainTable,
        private $eventPrefix,
        private $eventObject,
        private $resourceModel,
        private $model = Document::class,
        AdapterInterface $connection = null,
        AbstractDb $resource = null
    ) {
        // Pass required arguments to the parent constructor
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);

        // Initialize additional properties for the child class
        $this->_init($this->model, $this->resourceModel);
        $this->_eventPrefix = $this->eventPrefix;
        $this->_eventObject = $this->eventObject;
        $this->setMainTable($this->mainTable);
    }


    /**
     * Get aggregation interface instance
     *
     * @return AggregationInterface
     */
    public function getAggregations(): AggregationInterface
    {
        return $this->aggregations;
    }

    /**
     * Set aggregation interface instance
     *
     * @param AggregationInterface $aggregations
     * @return $this
     */
    public function setAggregations($aggregations): static
    {
        $this->aggregations = $aggregations;
        return $this;
    }

    /**
     * Get search criteria.
     *
     * @return \Magento\Framework\Api\SearchCriteriaInterface|null
     */
    public function getSearchCriteria(): ?\Magento\Framework\Api\SearchCriteriaInterface
    {
        return null;
    }

    /**
     * Set search criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setSearchCriteria(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null): static
    {
        return $this;
    }

    /**
     * Get total count.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->getSize();
    }

    /**
     * Set total count.
     *
     * @param int $totalCount
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setTotalCount($totalCount): static
    {
        return $this;
    }

    /**
     * Set items list.
     *
     * @param \Magento\Framework\Api\ExtensibleDataInterface[] $items
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setItems(array $items = null): static
    {
        return $this;
    }
}
