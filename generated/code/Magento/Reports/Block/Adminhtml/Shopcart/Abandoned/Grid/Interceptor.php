<?php
namespace Magento\Reports\Block\Adminhtml\Shopcart\Abandoned\Grid;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Shopcart\Abandoned\Grid
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Shopcart\Abandoned\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Reports\Model\ResourceModel\Quote\CollectionFactory $quotesFactory, ?\Magento\Framework\Url\DecoderInterface $urlDecoder = null, ?\Magento\Framework\Stdlib\Parameters $parameters = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $quotesFactory, $urlDecoder, $parameters, $data);
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
