<?php
namespace Magento\LoginAsCustomerAdminUi\Block\Adminhtml\ConfirmationPopup;

/**
 * Interceptor class for @see \Magento\LoginAsCustomerAdminUi\Block\Adminhtml\ConfirmationPopup
 */
class Interceptor extends \Magento\LoginAsCustomerAdminUi\Block\Adminhtml\ConfirmationPopup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Store\Ui\Component\Listing\Column\Store\Options $storeOptions, \Magento\LoginAsCustomerApi\Api\ConfigInterface $config, \Magento\Framework\Serialize\Serializer\Json $json, array $data = [], ?\Magento\LoginAsCustomerAdminUi\Ui\Customer\Component\ConfirmationPopup\Options $options = null)
    {
        $this->___init();
        parent::__construct($context, $storeOptions, $config, $json, $data, $options);
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
