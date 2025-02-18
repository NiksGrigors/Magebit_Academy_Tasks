<?php
namespace Magento\TwoFactorAuth\Block\Configure;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Block\Configure
 */
class Interceptor extends \Magento\TwoFactorAuth\Block\Configure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $tfa, $data);
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
