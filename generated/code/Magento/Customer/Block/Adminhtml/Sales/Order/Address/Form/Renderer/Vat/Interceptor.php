<?php
namespace Magento\Customer\Block\Adminhtml\Sales\Order\Address\Form\Renderer\Vat;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Sales\Order\Address\Form\Renderer\Vat
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Sales\Order\Address\Form\Renderer\Vat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data, $secureRenderer);
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
