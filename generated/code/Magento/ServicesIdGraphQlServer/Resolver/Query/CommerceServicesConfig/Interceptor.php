<?php
namespace Magento\ServicesIdGraphQlServer\Resolver\Query\CommerceServicesConfig;

/**
 * Interceptor class for @see \Magento\ServicesIdGraphQlServer\Resolver\Query\CommerceServicesConfig
 */
class Interceptor extends \Magento\ServicesIdGraphQlServer\Resolver\Query\CommerceServicesConfig implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ServicesId\Model\ServicesConfigInterface $servicesConfig)
    {
        $this->___init();
        parent::__construct($servicesConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
