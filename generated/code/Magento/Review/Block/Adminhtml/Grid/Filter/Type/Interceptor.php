<?php
namespace Magento\Review\Block\Adminhtml\Grid\Filter\Type;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Grid\Filter\Type
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Grid\Filter\Type implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\DB\Helper $resourceHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $data);
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
