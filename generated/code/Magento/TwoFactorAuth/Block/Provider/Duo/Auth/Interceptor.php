<?php
namespace Magento\TwoFactorAuth\Block\Provider\Duo\Auth;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Block\Provider\Duo\Auth
 */
class Interceptor extends \Magento\TwoFactorAuth\Block\Provider\Duo\Auth implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Auth\Session $session, \Magento\TwoFactorAuth\Model\Provider\Engine\DuoSecurity $duoSecurity, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $session, $duoSecurity, $data);
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
