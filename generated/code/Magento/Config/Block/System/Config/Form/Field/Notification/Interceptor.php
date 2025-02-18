<?php
namespace Magento\Config\Block\System\Config\Form\Field\Notification;

/**
 * Interceptor class for @see \Magento\Config\Block\System\Config\Form\Field\Notification
 */
class Interceptor extends \Magento\Config\Block\System\Config\Form\Field\Notification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Stdlib\DateTime\DateTimeFormatterInterface $dateTimeFormatter, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $dateTimeFormatter, $data);
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
