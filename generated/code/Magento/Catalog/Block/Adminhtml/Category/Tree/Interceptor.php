<?php
namespace Magento\Catalog\Block\Adminhtml\Category\Tree;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Category\Tree
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Category\Tree implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\ResourceModel\Category\Tree $categoryTree, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\DB\Helper $resourceHelper, \Magento\Backend\Model\Auth\Session $backendSession, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $categoryTree, $registry, $categoryFactory, $jsonEncoder, $resourceHelper, $backendSession, $data, $secureRenderer);
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
