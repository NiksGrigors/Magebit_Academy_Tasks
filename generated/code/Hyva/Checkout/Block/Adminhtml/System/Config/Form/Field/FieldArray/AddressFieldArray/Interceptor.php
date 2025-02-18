<?php
namespace Hyva\Checkout\Block\Adminhtml\System\Config\Form\Field\FieldArray\AddressFieldArray;

/**
 * Interceptor class for @see \Hyva\Checkout\Block\Adminhtml\System\Config\Form\Field\FieldArray\AddressFieldArray
 */
class Interceptor extends \Hyva\Checkout\Block\Adminhtml\System\Config\Form\Field\FieldArray\AddressFieldArray implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\View\Element\BlockFactory $blockFactory, \Magento\Framework\Serialize\Serializer\Json $serializer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $blockFactory, $serializer, $data);
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
