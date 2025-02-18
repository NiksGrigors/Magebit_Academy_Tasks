<?php
namespace Magento\PageBuilder\Block\Adminhtml\System\Config\SwitchAttributeType;

/**
 * Interceptor class for @see \Magento\PageBuilder\Block\Adminhtml\System\Config\SwitchAttributeType
 */
class Interceptor extends \Magento\PageBuilder\Block\Adminhtml\System\Config\SwitchAttributeType implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
