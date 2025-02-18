<?php
namespace Magento\Payment\Block\Transparent\Iframe;

/**
 * Interceptor class for @see \Magento\Payment\Block\Transparent\Iframe
 */
class Interceptor extends \Magento\Payment\Block\Transparent\Iframe implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $data, $jsonHelper);
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
