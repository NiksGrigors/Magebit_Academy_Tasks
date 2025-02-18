<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
 */
class TotalSegmentExtension extends \Magento\Framework\Api\AbstractSimpleObject implements TotalSegmentExtensionInterface
{
    /**
     * @return \Magento\Tax\Api\Data\GrandTotalDetailsInterface[]|null
     */
    public function getTaxGrandtotalDetails()
    {
        return $this->_get('tax_grandtotal_details');
    }

    /**
     * @param \Magento\Tax\Api\Data\GrandTotalDetailsInterface[] $taxGrandtotalDetails
     * @return $this
     */
    public function setTaxGrandtotalDetails($taxGrandtotalDetails)
    {
        $this->setData('tax_grandtotal_details', $taxGrandtotalDetails);
        return $this;
    }

    /**
     * @return \Hyva\Checkout\Api\Data\Quote\TaxDetailsExtensionAttributeInterface[]|null
     */
    public function getTaxDetails()
    {
        return $this->_get('tax_details');
    }

    /**
     * @param \Hyva\Checkout\Api\Data\Quote\TaxDetailsExtensionAttributeInterface[] $taxDetails
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->setData('tax_details', $taxDetails);
        return $this;
    }
}
