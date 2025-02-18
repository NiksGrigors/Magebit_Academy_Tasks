<?php
namespace Magento\AdminAdobeIms\Block\Adminhtml\ImsReAuth;

/**
 * Interceptor class for @see \Magento\AdminAdobeIms\Block\Adminhtml\ImsReAuth
 */
class Interceptor extends \Magento\AdminAdobeIms\Block\Adminhtml\ImsReAuth implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\AdminAdobeIms\Service\ImsConfig $adminImsConfig, \Magento\Framework\Serialize\Serializer\JsonHexTag $json, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $adminImsConfig, $json, $data);
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
