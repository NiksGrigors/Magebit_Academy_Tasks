<?php
namespace Magento\TwoFactorAuth\Block\ConfigureLater;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Block\ConfigureLater
 */
class Interceptor extends \Magento\TwoFactorAuth\Block\ConfigureLater implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Authorization\Model\UserContextInterface $userContext, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $tfa, $serializer, $formKey, $userContext, $data);
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
