<?php
namespace Magento\Config\Model\Config\Structure;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Structure
 */
class Interceptor extends \Magento\Config\Model\Config\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Structure\Data $structureData, \Magento\Config\Model\Config\Structure\Element\Iterator\Tab $tabIterator, \Magento\Config\Model\Config\Structure\Element\FlyweightFactory $flyweightFactory, \Magento\Config\Model\Config\ScopeDefiner $scopeDefiner)
    {
        $this->___init();
        parent::__construct($structureData, $tabIterator, $flyweightFactory, $scopeDefiner);
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionList()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSectionList');
        return $pluginInfo ? $this->___callPlugins('getSectionList', func_get_args(), $pluginInfo) : parent::getSectionList();
    }

    /**
     * {@inheritdoc}
     */
    public function getElementByPathParts(array $pathParts)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementByPathParts');
        return $pluginInfo ? $this->___callPlugins('getElementByPathParts', func_get_args(), $pluginInfo) : parent::getElementByPathParts($pathParts);
    }
}
