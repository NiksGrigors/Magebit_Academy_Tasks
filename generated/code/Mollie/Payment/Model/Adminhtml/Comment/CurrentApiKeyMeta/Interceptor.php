<?php
namespace Mollie\Payment\Model\Adminhtml\Comment\CurrentApiKeyMeta;

/**
 * Interceptor class for @see \Mollie\Payment\Model\Adminhtml\Comment\CurrentApiKeyMeta
 */
class Interceptor extends \Mollie\Payment\Model\Adminhtml\Comment\CurrentApiKeyMeta implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\Encryption\EncryptorInterface $encryptor, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $encryptor, $data);
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
