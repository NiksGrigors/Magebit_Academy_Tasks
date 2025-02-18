<?php
namespace Hyva\MollieThemeBundle\Block\System\Config\Fieldset\MolliePaymentFieldset;

/**
 * Interceptor class for @see \Hyva\MollieThemeBundle\Block\System\Config\Fieldset\MolliePaymentFieldset
 */
class Interceptor extends \Hyva\MollieThemeBundle\Block\System\Config\Fieldset\MolliePaymentFieldset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\View\Helper\Js $jsHelper, \Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $authSession, $jsHelper, $secureRenderer, $data);
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
