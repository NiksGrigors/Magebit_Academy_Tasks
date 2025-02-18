<?php
namespace Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Newfolder;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Newfolder
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Newfolder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null, ?\Magento\Directory\Helper\Data $directoryHelper = null)
    {
        $this->___init();
        parent::__construct($context, $data, $jsonHelper, $directoryHelper);
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
