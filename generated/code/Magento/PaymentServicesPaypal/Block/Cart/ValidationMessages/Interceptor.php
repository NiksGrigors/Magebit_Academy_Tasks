<?php
namespace Magento\PaymentServicesPaypal\Block\Cart\ValidationMessages;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Block\Cart\ValidationMessages
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Block\Cart\ValidationMessages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Message\Factory $messageFactory, \Magento\Framework\Message\CollectionFactory $collectionFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\View\Element\Message\InterpretationStrategyInterface $interpretationStrategy, \Magento\Checkout\Helper\Cart $cartHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $messageFactory, $collectionFactory, $messageManager, $interpretationStrategy, $cartHelper, $data);
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
