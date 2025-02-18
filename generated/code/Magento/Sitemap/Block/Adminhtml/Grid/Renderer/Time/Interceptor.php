<?php
namespace Magento\Sitemap\Block\Adminhtml\Grid\Renderer\Time;

/**
 * Interceptor class for @see \Magento\Sitemap\Block\Adminhtml\Grid\Renderer\Time
 */
class Interceptor extends \Magento\Sitemap\Block\Adminhtml\Grid\Renderer\Time implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Stdlib\DateTime\DateTime $date, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $date, $data);
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
