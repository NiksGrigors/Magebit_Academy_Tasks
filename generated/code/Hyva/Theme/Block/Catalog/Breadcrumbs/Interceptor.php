<?php
namespace Hyva\Theme\Block\Catalog\Breadcrumbs;

/**
 * Interceptor class for @see \Hyva\Theme\Block\Catalog\Breadcrumbs
 */
class Interceptor extends \Hyva\Theme\Block\Catalog\Breadcrumbs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Helper\Data $catalogData, \Magento\Framework\App\Config\ScopeConfigInterface $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $catalogData, $config, $data);
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
