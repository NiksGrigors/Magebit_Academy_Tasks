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
    public function getList(?array $checkouts = null) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($checkouts);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath(array $path) : ?array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function isHyvaCheckout(string $namespace) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isHyvaCheckout');
        return $pluginInfo ? $this->___callPlugins('isHyvaCheckout', func_get_args(), $pluginInfo) : parent::isHyvaCheckout($namespace);
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveCheckoutData() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActiveCheckoutData');
        return $pluginInfo ? $this->___callPlugins('getActiveCheckoutData', func_get_args(), $pluginInfo) : parent::getActiveCheckoutData();
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveCheckoutNamespace() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActiveCheckoutNamespace');
        return $pluginInfo ? $this->___callPlugins('getActiveCheckoutNamespace', func_get_args(), $pluginInfo) : parent::getActiveCheckoutNamespace();
    }

    /**
     * {@inheritdoc}
     */
    public function merge(array $config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'merge');
        return $pluginInfo ? $this->___callPlugins('merge', func_get_args(), $pluginInfo) : parent::merge($config);
    }

    /**
     * {@inheritdoc}
     */
    public function get($path = null, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($path, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reset');
        return $pluginInfo ? $this->___callPlugins('reset', func_get_args(), $pluginInfo) : parent::reset();
    }

    /**
     * {@inheritdoc}
     */
    public function __debugInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__debugInfo');
        return $pluginInfo ? $this->___callPlugins('__debugInfo', func_get_args(), $pluginInfo) : parent::__debugInfo();
    }
}
