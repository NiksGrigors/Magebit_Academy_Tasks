<?php
namespace Magento\PageBuilder\Block\WysiwygSetup;

/**
 * Interceptor class for @see \Magento\PageBuilder\Block\WysiwygSetup
 */
class Interceptor extends \Magento\PageBuilder\Block\WysiwygSetup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Ui\Component\Wysiwyg\ConfigInterface $config, array $data = [], ?\Magento\Framework\Cache\FrontendInterface $cache = null, ?\Magento\PageBuilder\Model\Session\RandomKey $sessionRandomKey = null)
    {
        $this->___init();
        parent::__construct($context, $config, $data, $cache, $sessionRandomKey);
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
