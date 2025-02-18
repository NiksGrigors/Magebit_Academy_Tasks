<?php
namespace Magento\Bundle\Block\Adminhtml\Catalog\Product\Edit\Tab\Bundle\Option;

/**
 * Interceptor class for @see \Magento\Bundle\Block\Adminhtml\Catalog\Product\Edit\Tab\Bundle\Option
 */
class Interceptor extends \Magento\Bundle\Block\Adminhtml\Catalog\Product\Edit\Tab\Bundle\Option implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Config\Model\Config\Source\Yesno $yesno, \Magento\Bundle\Model\Source\Option\Type $optionTypes, \Magento\Framework\Registry $registry, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null)
    {
        $this->___init();
        parent::__construct($context, $yesno, $optionTypes, $registry, $data, $jsonHelper);
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
