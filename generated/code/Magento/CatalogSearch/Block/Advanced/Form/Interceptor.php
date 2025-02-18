<?php
namespace Magento\CatalogSearch\Block\Advanced\Form;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Block\Advanced\Form
 */
class Interceptor extends \Magento\CatalogSearch\Block\Advanced\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\CatalogSearch\Model\Advanced $catalogSearchAdvanced, \Magento\Directory\Model\CurrencyFactory $currencyFactory, array $data = [], ?\Magento\CatalogSearch\Helper\Data $catalogSearchHelper = null)
    {
        $this->___init();
        parent::__construct($context, $catalogSearchAdvanced, $currencyFactory, $data, $catalogSearchHelper);
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
