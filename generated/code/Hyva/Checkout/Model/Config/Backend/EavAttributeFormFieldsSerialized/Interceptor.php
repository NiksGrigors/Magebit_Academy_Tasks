<?php
namespace Hyva\Checkout\Model\Config\Backend\EavAttributeFormFieldsSerialized;

/**
 * Interceptor class for @see \Hyva\Checkout\Model\Config\Backend\EavAttributeFormFieldsSerialized
 */
class Interceptor extends \Hyva\Checkout\Model\Config\Backend\EavAttributeFormFieldsSerialized implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection, \Magento\Framework\Serialize\Serializer\Json $serializer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $serializer, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
