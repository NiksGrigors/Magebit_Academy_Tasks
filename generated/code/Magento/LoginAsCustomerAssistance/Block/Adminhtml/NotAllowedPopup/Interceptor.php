<?php
namespace Magento\LoginAsCustomerAssistance\Block\Adminhtml\NotAllowedPopup;

/**
 * Interceptor class for @see \Magento\LoginAsCustomerAssistance\Block\Adminhtml\NotAllowedPopup
 */
class Interceptor extends \Magento\LoginAsCustomerAssistance\Block\Adminhtml\NotAllowedPopup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\LoginAsCustomerApi\Api\ConfigInterface $config, \Magento\Framework\Serialize\Serializer\Json $json, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $json, $data);
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
