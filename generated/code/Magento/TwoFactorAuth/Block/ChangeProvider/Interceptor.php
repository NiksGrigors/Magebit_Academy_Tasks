<?php
namespace Magento\TwoFactorAuth\Block\ChangeProvider;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Block\ChangeProvider
 */
class Interceptor extends \Magento\TwoFactorAuth\Block\ChangeProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Auth\Session $session, \Magento\Authorization\Model\UserContextInterface $userContext, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $session, $userContext, $tfa, $data);
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
