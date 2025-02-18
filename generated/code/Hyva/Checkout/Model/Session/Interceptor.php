<?php
namespace Hyva\Checkout\Model\Session;

/**
 * Interceptor class for @see \Hyva\Checkout\Model\Session
 */
class Interceptor extends \Hyva\Checkout\Model\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Hyva\Checkout\Model\CustomConditionFactory $customConditionFactory, \Hyva\Checkout\Model\CustomConditionProcessor $customConditionProcessor, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\Session\SessionStartChecker $sessionStartChecker = null)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $customConditionFactory, $customConditionProcessor, $serializer, $storeManager, $sessionStartChecker);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'start');
        return $pluginInfo ? $this->___callPlugins('start', func_get_args(), $pluginInfo) : parent::start();
    }

    /**
     * {@inheritdoc}
     */
    public function clearStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearStorage');
        return $pluginInfo ? $this->___callPlugins('clearStorage', func_get_args(), $pluginInfo) : parent::clearStorage();
    }
}
