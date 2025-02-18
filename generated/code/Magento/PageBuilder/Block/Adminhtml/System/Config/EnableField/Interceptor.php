<?php
namespace Magento\PageBuilder\Block\Adminhtml\System\Config\EnableField;

/**
 * Interceptor class for @see \Magento\PageBuilder\Block\Adminhtml\System\Config\EnableField
 */
class Interceptor extends \Magento\PageBuilder\Block\Adminhtml\System\Config\EnableField implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Serialize\Serializer\Json $json, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $json, $data);
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
