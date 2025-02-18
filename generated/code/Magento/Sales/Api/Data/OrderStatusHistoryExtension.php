<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\OrderStatusHistoryInterface
 */
class OrderStatusHistoryExtension extends \Magento\Framework\Api\AbstractSimpleObject implements OrderStatusHistoryExtensionInterface
{
    /**
     * @return boolean|null
     */
    public function getIsCustomerComment()
    {
        return $this->_get('is_customer_comment');
    }

    /**
     * @param boolean $isCustomerComment
     * @return $this
     */
    public function setIsCustomerComment($isCustomerComment)
    {
        $this->setData('is_customer_comment', $isCustomerComment);
        return $this;
    }
}
