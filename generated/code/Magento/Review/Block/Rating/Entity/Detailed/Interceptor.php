<?php
namespace Magento\Review\Block\Rating\Entity\Detailed;

/**
 * Interceptor class for @see \Magento\Review\Block\Rating\Entity\Detailed
 */
class Interceptor extends \Magento\Review\Block\Rating\Entity\Detailed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Review\Model\RatingFactory $ratingFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $ratingFactory, $data);
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
