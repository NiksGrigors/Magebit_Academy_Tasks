<?php
namespace Magento\PageBuilder\Block\Adminhtml\Stage\Render;

/**
 * Interceptor class for @see \Magento\PageBuilder\Block\Adminhtml\Stage\Render
 */
class Interceptor extends \Magento\PageBuilder\Block\Adminhtml\Stage\Render implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\RequireJs\Model\FileManager $fileManager, \Magento\PageBuilder\Model\Stage\Config $config, \Magento\Framework\Serialize\Serializer\Json $json, array $data = [], ?\Magento\Framework\View\Asset\Minification $minification = null)
    {
        $this->___init();
        parent::__construct($context, $fileManager, $config, $json, $data, $minification);
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
