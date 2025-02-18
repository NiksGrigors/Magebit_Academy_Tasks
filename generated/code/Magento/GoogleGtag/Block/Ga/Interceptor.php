<?php
namespace Magento\GoogleGtag\Block\Ga;

/**
 * Interceptor class for @see \Magento\GoogleGtag\Block\Ga
 */
class Interceptor extends \Magento\GoogleGtag\Block\Ga implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\GoogleGtag\Model\Config\GtagConfig $googleGtagConfig, \Magento\Cookie\Helper\Cookie $cookieHelper, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $googleGtagConfig, $cookieHelper, $serializer, $searchCriteriaBuilder, $orderRepository, $data);
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
