<?php
namespace Magento\PageCache\Block\System\Config\Form\Field\Export\Varnish6;

/**
 * Interceptor class for @see \Magento\PageCache\Block\System\Config\Form\Field\Export\Varnish6
 */
class Interceptor extends \Magento\PageCache\Block\System\Config\Form\Field\Export\Varnish6 implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $data, $secureRenderer);
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
