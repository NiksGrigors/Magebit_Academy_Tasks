<?php
namespace Magento\Catalog\Block\Widget\Link;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Widget\Link
 */
class Interceptor extends \Magento\Catalog\Block\Widget\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, ?\Magento\Catalog\Model\ResourceModel\AbstractResource $entityResource = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlFinder, $entityResource, $data);
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
