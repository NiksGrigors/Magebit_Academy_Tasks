<?php
namespace Magento\Sales\Model\Order\Status\History;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Status\History
 */
class Interceptor extends \Magento\Sales\Model\Order\Status\History implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $storeManager, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getComment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getComment');
        return $pluginInfo ? $this->___callPlugins('getComment', func_get_args(), $pluginInfo) : parent::getComment();
    }
}
