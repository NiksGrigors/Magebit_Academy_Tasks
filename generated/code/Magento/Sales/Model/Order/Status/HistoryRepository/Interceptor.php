<?php
namespace Magento\Sales\Model\Order\Status\HistoryRepository;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Status\HistoryRepository
 */
class Interceptor extends \Magento\Sales\Model\Order\Status\HistoryRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\Spi\OrderStatusHistoryResourceInterface $historyResource, \Magento\Sales\Api\Data\OrderStatusHistoryInterfaceFactory $historyFactory, \Magento\Sales\Api\Data\OrderStatusHistorySearchResultInterfaceFactory $searchResultFactory, \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor)
    {
        $this->___init();
        parent::__construct($historyResource, $historyFactory, $searchResultFactory, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function get($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($id);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($entity);
    }
}
