<?php
namespace Hyva\Theme\Block\ViewModelCacheTagsBlock;

/**
 * Interceptor class for @see \Hyva\Theme\Block\ViewModelCacheTagsBlock
 */
class Interceptor extends \Hyva\Theme\Block\ViewModelCacheTagsBlock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Hyva\Theme\Model\ViewModelCacheTags $viewModelCacheTags, \Magento\Framework\App\State $appState, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $viewModelCacheTags, $appState, $data);
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
