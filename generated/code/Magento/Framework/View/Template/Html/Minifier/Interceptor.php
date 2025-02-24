<?php
namespace Magento\Framework\View\Template\Html\Minifier;

/**
 * Interceptor class for @see \Magento\Framework\View\Template\Html\Minifier
 */
class Interceptor extends \Magento\Framework\View\Template\Html\Minifier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filesystem\Directory\ReadFactory $readFactory)
    {
        $this->___init();
        parent::__construct($filesystem, $readFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getMinified($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinified');
        return $pluginInfo ? $this->___callPlugins('getMinified', func_get_args(), $pluginInfo) : parent::getMinified($file);
    }

    /**
     * {@inheritdoc}
     */
    public function getPathToMinified($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPathToMinified');
        return $pluginInfo ? $this->___callPlugins('getPathToMinified', func_get_args(), $pluginInfo) : parent::getPathToMinified($file);
    }

    /**
     * {@inheritdoc}
     */
    public function minify($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'minify');
        return $pluginInfo ? $this->___callPlugins('minify', func_get_args(), $pluginInfo) : parent::minify($file);
    }
}
