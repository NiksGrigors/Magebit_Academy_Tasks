<?php
namespace Magebit\Faq\Block\FaqList;

/**
 * Interceptor class for @see \Magebit\Faq\Block\FaqList
 */
class Interceptor extends \Magebit\Faq\Block\FaqList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magebit\Faq\Api\FaqRepositoryInterface $faqRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $faqRepository, $data);
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
