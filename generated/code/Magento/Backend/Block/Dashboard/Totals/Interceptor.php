<?php
namespace Magento\Backend\Block\Dashboard\Totals;

/**
 * Interceptor class for @see \Magento\Backend\Block\Dashboard\Totals
 */
class Interceptor extends \Magento\Backend\Block\Dashboard\Totals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Reports\Model\ResourceModel\Order\CollectionFactory $collectionFactory, \Magento\Framework\Module\Manager $moduleManager, array $data = [], ?\Magento\Backend\Model\Dashboard\Period $period = null)
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $moduleManager, $data, $period);
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
