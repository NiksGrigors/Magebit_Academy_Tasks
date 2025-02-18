<?php
namespace Magento\Indexer\Block\Backend\Grid\Column\Renderer\ScheduleStatus;

/**
 * Interceptor class for @see \Magento\Indexer\Block\Backend\Grid\Column\Renderer\ScheduleStatus
 */
class Interceptor extends \Magento\Indexer\Block\Backend\Grid\Column\Renderer\ScheduleStatus implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Escaper $escaper, \Magento\Indexer\Model\IndexerFactory $indexerFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $escaper, $indexerFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
