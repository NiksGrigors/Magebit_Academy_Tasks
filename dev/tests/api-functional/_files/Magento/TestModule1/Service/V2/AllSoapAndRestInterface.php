<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\TestModule1\Service\V2;

use Magento\TestModule1\Service\V2\Entity\Item;

interface AllSoapAndRestInterface
{
    /**
     * Get Item.
     *
     * @param int $id
     * @return \Magento\TestModule1\Service\V2\Entity\Item
     */
    public function item($id);

    /**
     * Create Item.
     *
     * @param string $name
     * @return \Magento\TestModule1\Service\V2\Entity\Item
     */
    public function create($name);

    /**
     * Update Item.
     *
     * @param \Magento\TestModule1\Service\V2\Entity\Item $entityItem
     * @return \Magento\TestModule1\Service\V2\Entity\Item
     */
    public function update(Item $entityItem);

    /**
     * Retrieve a list of items.
     *
     * @param \Magento\Framework\Api\Filter[] $filters
     * @param string $sortOrder
     * @return \Magento\TestModule1\Service\V2\Entity\Item[]
     */
    public function items($filters = [], $sortOrder = 'ASC');

    /**
     * Delete an Item.
     *
     * @param int $id
     * @return \Magento\TestModule1\Service\V2\Entity\Item
     */
    public function delete($id);
}
