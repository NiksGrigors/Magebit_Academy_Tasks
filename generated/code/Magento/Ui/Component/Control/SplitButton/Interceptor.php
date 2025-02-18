<?php
namespace Magento\Ui\Component\Control\SplitButton;

/**
 * Interceptor class for @see \Magento\Ui\Component\Control\SplitButton
 */
class Interceptor extends \Magento\Ui\Component\Control\SplitButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], ?\Magento\Framework\Math\Random $random = null, ?\Magento\Framework\View\Helper\SecureHtmlRenderer $htmlRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $data, $random, $htmlRenderer);
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
