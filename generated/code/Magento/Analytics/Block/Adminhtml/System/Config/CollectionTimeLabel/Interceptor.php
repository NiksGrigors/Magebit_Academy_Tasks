<?php
namespace Magento\Analytics\Block\Adminhtml\System\Config\CollectionTimeLabel;

/**
 * Interceptor class for @see \Magento\Analytics\Block\Adminhtml\System\Config\CollectionTimeLabel
 */
class Interceptor extends \Magento\Analytics\Block\Adminhtml\System\Config\CollectionTimeLabel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Locale\ResolverInterface $localeResolver, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $localeResolver, $data);
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
