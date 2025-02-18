<?php
namespace Magento\Rule\Block\Editable;

/**
 * Interceptor class for @see \Magento\Rule\Block\Editable
 */
class Interceptor extends \Magento\Rule\Block\Editable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\Translate\InlineInterface $inlineTranslate, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $inlineTranslate, $data);
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
