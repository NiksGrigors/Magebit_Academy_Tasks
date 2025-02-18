<?php
namespace Magento\ReCaptchaUi\Block\ReCaptcha;

/**
 * Interceptor class for @see \Magento\ReCaptchaUi\Block\ReCaptcha
 */
class Interceptor extends \Magento\ReCaptchaUi\Block\ReCaptcha implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\ReCaptchaUi\Model\UiConfigResolverInterface $captchaUiConfigResolver, \Magento\ReCaptchaUi\Model\IsCaptchaEnabledInterface $isCaptchaEnabled, \Magento\Framework\Serialize\Serializer\Json $serializer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $captchaUiConfigResolver, $isCaptchaEnabled, $serializer, $data);
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
