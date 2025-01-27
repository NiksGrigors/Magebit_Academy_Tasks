<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\TestModule2\Service\V1;

use Magento\TestModule2\Service\V1\Entity\Item;

interface SubsetRestInterface
{
    /**
     * Return a single Item.
     *
     * @param int $id
     * @return \Magento\TestModule2\Service\V1\Entity\Item
     */
    public function item($id);

    /**
     * Return multiple items.
     *
     * @return \Magento\TestModule2\Service\V1\Entity\Item[]
     */
    public function items();

    /**
     * Create an Item.
     *
     * @param string $name
     * @return \Magento\TestModule2\Service\V1\Entity\Item
     */
    public function create($name);

    /**
     * Update an Item.
     *
     * @param \Magento\TestModule2\Service\V1\Entity\Item $item
     * @return \Magento\TestModule2\Service\V1\Entity\Item
     */
    public function update(Item $item);

    /**
     * Delete an Item.
     *
     * @param int $id
     * @return \Magento\TestModule2\Service\V1\Entity\Item
     */
    public function remove($id);
}
