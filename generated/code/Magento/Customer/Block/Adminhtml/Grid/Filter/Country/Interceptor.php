<?php
namespace Magento\Customer\Block\Adminhtml\Grid\Filter\Country;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Grid\Filter\Country
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Grid\Filter\Country implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\DB\Helper $resourceHelper, \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $collectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $collectionFactory, $data);
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
