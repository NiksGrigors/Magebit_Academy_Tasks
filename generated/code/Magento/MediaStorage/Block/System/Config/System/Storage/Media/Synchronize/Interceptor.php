<?php
namespace Magento\MediaStorage\Block\System\Config\System\Storage\Media\Synchronize;

/**
 * Interceptor class for @see \Magento\MediaStorage\Block\System\Config\System\Storage\Media\Synchronize
 */
class Interceptor extends \Magento\MediaStorage\Block\System\Config\System\Storage\Media\Synchronize implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\MediaStorage\Model\File\Storage $fileStorage, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $fileStorage, $data);
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
