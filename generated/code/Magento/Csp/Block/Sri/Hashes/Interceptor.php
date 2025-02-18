<?php
namespace Magento\Csp\Block\Sri\Hashes;

/**
 * Interceptor class for @see \Magento\Csp\Block\Sri\Hashes
 */
class Interceptor extends \Magento\Csp\Block\Sri\Hashes implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], ?\Magento\Csp\Model\SubresourceIntegrityRepositoryPool $integrityRepositoryPool = null, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $data, $integrityRepositoryPool, $serializer);
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
