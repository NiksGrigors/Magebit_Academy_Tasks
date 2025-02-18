<?php
namespace Magebit\PageListWidget\Block\Widget\PageList;

/**
 * Interceptor class for @see \Magebit\PageListWidget\Block\Widget\PageList
 */
class Interceptor extends \Magebit\PageListWidget\Block\Widget\PageList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $pageCollectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $pageCollectionFactory, $data);
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
