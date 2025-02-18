<?php
namespace Magento\PageBuilder\Block\Adminhtml\Html\Head\BabelPolyfill;

/**
 * Interceptor class for @see \Magento\PageBuilder\Block\Adminhtml\Html\Head\BabelPolyfill
 */
class Interceptor extends \Magento\PageBuilder\Block\Adminhtml\Html\Head\BabelPolyfill implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PageBuilder\Model\ConfigInterface $config, \Magento\Framework\HTTP\Header $httpHeader, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $httpHeader, $data);
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
