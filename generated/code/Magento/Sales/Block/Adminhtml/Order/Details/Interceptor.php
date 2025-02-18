<?php
namespace Magento\Sales\Block\Adminhtml\Order\Details;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Details
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Details implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], ?\Magento\GiftMessage\Helper\Message $giftMessageHelper = null)
    {
        $this->___init();
        parent::__construct($context, $data, $giftMessageHelper);
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
