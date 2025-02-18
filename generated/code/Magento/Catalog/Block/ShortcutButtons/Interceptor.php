<?php
namespace Magento\Catalog\Block\ShortcutButtons;

/**
 * Interceptor class for @see \Magento\Catalog\Block\ShortcutButtons
 */
class Interceptor extends \Magento\Catalog\Block\ShortcutButtons implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, $isCatalogProduct = false, $orPosition = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $isCatalogProduct, $orPosition, $data);
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
