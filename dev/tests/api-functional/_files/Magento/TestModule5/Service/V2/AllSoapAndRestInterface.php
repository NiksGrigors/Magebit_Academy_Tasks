<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\TestModule5\Service\V2;

/**
 * Both SOAP and REST Version TWO
 * @package Magento\TestModule5\Service\V2
 */
interface AllSoapAndRestInterface
{
    /**
     * Retrieve existing Item.
     *
     * @param int $id
     * @return \Magento\TestModule5\Service\V2\Entity\AllSoapAndRest
     * @throws \Magento\Framework\Webapi\Exception
     */
    public function item($id);

    /**
     * Retrieve a list of all existing items.
     *
     * @return \Magento\TestModule5\Service\V2\Entity\AllSoapAndRest[]
     */
    public function items();

    /**
     * Add new Item.
     *
     * @param \Magento\TestModule5\Service\V2\Entity\AllSoapAndRest $item
     * @return \Magento\TestModule5\Service\V2\Entity\AllSoapAndRest
     */
    public function create(\Magento\TestModule5\Service\V2\Entity\AllSoapAndRest $item);

    /**
     * Update one Item.
     *
     * @param \Magento\TestModule5\Service\V2\Entity\AllSoapAndRest $item
     * @return \Magento\TestModule5\Service\V2\Entity\AllSoapAndRest
     */
    public function update(\Magento\TestModule5\Service\V2\Entity\AllSoapAndRest $item);

    /**
     * Delete existing Item.
     *
     * @param string $id
     * @return \Magento\TestModule5\Service\V2\Entity\AllSoapAndRest
     */
    public function delete($id);
}
