<?php
namespace Magento\ServicesIdLayout\Block\Adminhtml\Index;

/**
 * Interceptor class for @see \Magento\ServicesIdLayout\Block\Adminhtml\Index
 */
class Interceptor extends \Magento\ServicesIdLayout\Block\Adminhtml\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\GraphQlServer\Model\UrlProvider $graphQlUrl)
    {
        $this->___init();
        parent::__construct($context, $graphQlUrl);
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
