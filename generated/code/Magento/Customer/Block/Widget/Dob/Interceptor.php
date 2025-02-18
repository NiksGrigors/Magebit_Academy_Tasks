<?php
namespace Magento\Customer\Block\Widget\Dob;

/**
 * Interceptor class for @see \Magento\Customer\Block\Widget\Dob
 */
class Interceptor extends \Magento\Customer\Block\Widget\Dob implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Address $addressHelper, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadata, \Magento\Framework\View\Element\Html\Date $dateElement, \Magento\Framework\Data\Form\FilterFactory $filterFactory, array $data = [], ?\Magento\Framework\Json\EncoderInterface $encoder = null, ?\Magento\Framework\Locale\ResolverInterface $localeResolver = null)
    {
        $this->___init();
        parent::__construct($context, $addressHelper, $customerMetadata, $dateElement, $filterFactory, $data, $encoder, $localeResolver);
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
