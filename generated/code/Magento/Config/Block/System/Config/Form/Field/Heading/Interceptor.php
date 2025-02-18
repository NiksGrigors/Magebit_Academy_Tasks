<?php
namespace Magento\Config\Block\System\Config\Form\Field\Heading;

/**
 * Interceptor class for @see \Magento\Config\Block\System\Config\Form\Field\Heading
 */
class Interceptor extends \Magento\Config\Block\System\Config\Form\Field\Heading implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = [])
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
