<?php
namespace Magento\MediaGalleryUi\Block\Adminhtml\ImageDetailsStandalone;

/**
 * Interceptor class for @see \Magento\MediaGalleryUi\Block\Adminhtml\ImageDetailsStandalone
 */
class Interceptor extends \Magento\MediaGalleryUi\Block\Adminhtml\ImageDetailsStandalone implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\AuthorizationInterface $authorization, \Magento\Framework\Serialize\Serializer\Json $json, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null, ?\Magento\Directory\Helper\Data $directoryHelper = null)
    {
        $this->___init();
        parent::__construct($context, $authorization, $json, $data, $jsonHelper, $directoryHelper);
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
