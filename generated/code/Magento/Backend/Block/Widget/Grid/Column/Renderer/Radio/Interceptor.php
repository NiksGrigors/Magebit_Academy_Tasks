<?php
namespace Magento\Backend\Block\Widget\Grid\Column\Renderer\Radio;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Column\Renderer\Radio
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\Radio implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Backend\Block\Widget\Grid\Column\Renderer\Options\Converter $converter, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $converter, $data);
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
