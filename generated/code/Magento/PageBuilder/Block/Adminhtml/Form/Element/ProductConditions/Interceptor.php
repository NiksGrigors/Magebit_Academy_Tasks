<?php
namespace Magento\PageBuilder\Block\Adminhtml\Form\Element\ProductConditions;

/**
 * Interceptor class for @see \Magento\PageBuilder\Block\Adminhtml\Form\Element\ProductConditions
 */
class Interceptor extends \Magento\PageBuilder\Block\Adminhtml\Form\Element\ProductConditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Serialize\Serializer\Json $serializer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $serializer, $data);
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
