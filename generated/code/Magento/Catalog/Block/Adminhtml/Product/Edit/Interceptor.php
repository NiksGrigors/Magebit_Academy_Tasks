<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Eav\Model\Entity\Attribute\SetFactory $attributeSetFactory, \Magento\Framework\Registry $registry, \Magento\Catalog\Helper\Product $productHelper, \Magento\Framework\Escaper $escaper, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null)
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $attributeSetFactory, $registry, $productHelper, $escaper, $data, $jsonHelper);
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
