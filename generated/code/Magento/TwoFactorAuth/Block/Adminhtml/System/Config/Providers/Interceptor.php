<?php
namespace Magento\TwoFactorAuth\Block\Adminhtml\System\Config\Providers;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Block\Adminhtml\System\Config\Providers
 */
class Interceptor extends \Magento\TwoFactorAuth\Block\Adminhtml\System\Config\Providers implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Serialize\Serializer\Json $json, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $json, $data);
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
