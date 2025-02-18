<?php
namespace Magento\Sitemap\Block\Adminhtml\Grid\Renderer\Link;

/**
 * Interceptor class for @see \Magento\Sitemap\Block\Adminhtml\Grid\Renderer\Link
 */
class Interceptor extends \Magento\Sitemap\Block\Adminhtml\Grid\Renderer\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Sitemap\Model\SitemapFactory $sitemapFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Config\Model\Config\Reader\Source\Deployed\DocumentRoot $documentRoot, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $sitemapFactory, $filesystem, $documentRoot, $data);
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
