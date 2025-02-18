<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
 */
interface TotalSegmentExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Tax\Api\Data\GrandTotalDetailsInterface[]|null
     */
    public function getTaxGrandtotalDetails();

    /**
     * @param \Magento\Tax\Api\Data\GrandTotalDetailsInterface[] $taxGrandtotalDetails
     * @return $this
     */
    public function setTaxGrandtotalDetails($taxGrandtotalDetails);

    /**
     * @return \Hyva\Checkout\Api\Data\Quote\TaxDetailsExtensionAttributeInterface[]|null
     */
    public function getTaxDetails();

    /**
     * @param \Hyva\Checkout\Api\Data\Quote\TaxDetailsExtensionAttributeInterface[] $taxDetails
     * @return $this
     */
    public function setTaxDetails($taxDetails);
}
