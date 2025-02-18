<?php
namespace Magento\Catalog\Block\Rss\Product\Special;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Rss\Product\Special
 */
class Interceptor extends \Magento\Catalog\Block\Rss\Product\Special implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Http\Context $httpContext, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Catalog\Helper\Output $outputHelper, \Magento\Msrp\Helper\Data $msrpHelper, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Catalog\Model\Rss\Product\Special $rssModel, \Magento\Framework\App\Rss\UrlBuilderInterface $rssUrlBuilder, \Magento\Framework\Locale\ResolverInterface $localeResolver, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $httpContext, $imageHelper, $outputHelper, $msrpHelper, $priceCurrency, $rssModel, $rssUrlBuilder, $localeResolver, $data);
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
