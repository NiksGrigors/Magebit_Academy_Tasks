<?php
namespace Magento\Elasticsearch\ElasticAdapter\Model\Adapter\FieldMapper\ProductFieldMapper;

/**
 * Interceptor class for @see \Magento\Elasticsearch\ElasticAdapter\Model\Adapter\FieldMapper\ProductFieldMapper
 */
class Interceptor extends \Magento\Elasticsearch\ElasticAdapter\Model\Adapter\FieldMapper\ProductFieldMapper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProvider\FieldName\ResolverInterface $fieldNameResolver, \Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\AttributeProvider $attributeAdapterProvider, \Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProviderInterface $fieldProvider)
    {
        $this->___init();
        parent::__construct($fieldNameResolver, $attributeAdapterProvider, $fieldProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllAttributesTypes($context = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllAttributesTypes');
        return $pluginInfo ? $this->___callPlugins('getAllAttributesTypes', func_get_args(), $pluginInfo) : parent::getAllAttributesTypes($context);
    }
}
