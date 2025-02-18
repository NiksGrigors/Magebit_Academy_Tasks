<?php
namespace Magento\TwoFactorAuth\Block\Provider\Google\Configure;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Block\Provider\Google\Configure
 */
class Interceptor extends \Magento\TwoFactorAuth\Block\Provider\Google\Configure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\TwoFactorAuth\Model\Provider\Engine\Google $google, \Magento\Backend\Model\Auth\Session $session, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $google, $session, $data);
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
