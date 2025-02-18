<?php
namespace Hyva\Checkout\Model\Config;

/**
 * Interceptor class for @see \Hyva\Checkout\Model\Config
 */
class Interceptor extends \Hyva\Checkout\Model\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Hyva\Checkout\Model\Config\Reader $reader, \Magento\Framework\Config\CacheInterface $cache, \Hyva\Checkout\Model\ConfigData\HyvaThemes\SystemConfigGeneral $systemConfigGeneral, \Hyva\Checkout\Model\CustomCondition\IsDevice $customConditionIsDevice, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null, string $cacheId = 'hyva_checkout_config_cache')
    {
        $this->___init();
        parent::__construct($reader, $cache, $systemConfigGeneral, $customConditionIsDevice, $serializer, $cacheId);
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveCheckoutNamespace() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActiveCheckoutNamespace');
        return $pluginInfo ? $this->___callPlugins('getActiveCheckoutNamespace', func_get_args(), $pluginInfo) : parent::getActiveCheckoutNamespace();
    }
}
