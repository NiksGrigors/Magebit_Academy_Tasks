<?php
namespace Magento\TwoFactorAuth\Block\Provider\U2fKey\Auth;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Block\Provider\U2fKey\Auth
 */
class Interceptor extends \Magento\TwoFactorAuth\Block\Provider\U2fKey\Auth implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\TwoFactorAuth\Model\Provider\Engine\U2fKey\Session $u2fSession, \Magento\TwoFactorAuth\Model\Provider\Engine\U2fKey $u2fKey, \Magento\Backend\Model\Auth\Session $session, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $u2fSession, $u2fKey, $session, $data);
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
