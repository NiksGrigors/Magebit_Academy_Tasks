<?php
namespace Hyva\Checkout\Block\Adminhtml\Element\FieldArray\TypeRenderer;

/**
 * Interceptor class for @see \Hyva\Checkout\Block\Adminhtml\Element\FieldArray\TypeRenderer
 */
class Interceptor extends \Hyva\Checkout\Block\Adminhtml\Element\FieldArray\TypeRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\Data\Form\Element\Factory $formElementFactory, \Magento\Framework\DataObject\Factory $dataObjectFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $formElementFactory, $dataObjectFactory, $data);
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
