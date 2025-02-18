<?php
namespace Magento\Backend\Block\System\Store\Grid\Render\Website;

/**
 * Interceptor class for @see \Magento\Backend\Block\System\Store\Grid\Render\Website
 */
class Interceptor extends \Magento\Backend\Block\System\Store\Grid\Render\Website implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
