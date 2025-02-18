<?php
namespace Magento\Cms\Block\BlockByIdentifier;

/**
 * Interceptor class for @see \Magento\Cms\Block\BlockByIdentifier
 */
class Interceptor extends \Magento\Cms\Block\BlockByIdentifier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Api\GetBlockByIdentifierInterface $blockByIdentifier, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magento\Framework\View\Element\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($blockByIdentifier, $storeManager, $filterProvider, $context, $data);
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
