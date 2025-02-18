<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderStatusHistoryInterface
 */
interface OrderStatusHistoryExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return boolean|null
     */
    public function getIsCustomerComment();

    /**
     * @param boolean $isCustomerComment
     * @return $this
     */
    public function setIsCustomerComment($isCustomerComment);
}
