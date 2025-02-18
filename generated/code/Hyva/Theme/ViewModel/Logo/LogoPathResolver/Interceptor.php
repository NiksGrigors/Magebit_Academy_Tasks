<?php
namespace Hyva\Theme\ViewModel\Logo\LogoPathResolver;

/**
 * Interceptor class for @see \Hyva\Theme\ViewModel\Logo\LogoPathResolver
 */
class Interceptor extends \Hyva\Theme\ViewModel\Logo\LogoPathResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $fileStorageHelper, $data);
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
