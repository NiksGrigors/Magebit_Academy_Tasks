<?php
namespace Magento\Robots\Block\Data;

/**
 * Interceptor class for @see \Magento\Robots\Block\Data
 */
class Interceptor extends \Magento\Robots\Block\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Robots\Model\Robots $robots, \Magento\Store\Model\StoreResolver $storeResolver, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $robots, $storeResolver, $storeManager, $data);
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
