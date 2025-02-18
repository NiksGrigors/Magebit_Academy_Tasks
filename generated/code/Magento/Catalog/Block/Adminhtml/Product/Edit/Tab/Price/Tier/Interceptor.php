<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Price\Tier;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Price\Tier
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Price\Tier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\Registry $registry, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null)
    {
        $this->___init();
        parent::__construct($context, $groupRepository, $directoryHelper, $moduleManager, $registry, $groupManagement, $searchCriteriaBuilder, $localeCurrency, $data, $jsonHelper);
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
