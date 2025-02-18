<?php
namespace Magento\PaymentServicesPaypal\Block\Adminhtml\Form\AdminHostedFields;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\Adminhtml\Form\AdminHostedFields
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\Adminhtml\Form\AdminHostedFields implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PaymentServicesPaypal\Model\Adminhtml\SdkParams $sdkParams, \Magento\Framework\UrlInterface $url, \Magento\Backend\Model\Session\Quote $sessionQuote, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $sdkParams, $url, $sessionQuote, $data);
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
