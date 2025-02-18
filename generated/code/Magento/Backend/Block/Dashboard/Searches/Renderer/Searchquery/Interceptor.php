<?php
namespace Magento\Backend\Block\Dashboard\Searches\Renderer\Searchquery;

/**
 * Interceptor class for @see \Magento\Backend\Block\Dashboard\Searches\Renderer\Searchquery
 */
class Interceptor extends \Magento\Backend\Block\Dashboard\Searches\Renderer\Searchquery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Stdlib\StringUtils $stringHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $stringHelper, $data);
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
