<?php
namespace Magento\Customer\Block\Adminhtml\Grid\Renderer\Multiaction;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Grid\Renderer\Multiaction
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Grid\Renderer\Multiaction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureHtmlRenderer = null, ?\Magento\Framework\Math\Random $random = null)
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data, $secureHtmlRenderer, $random);
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
