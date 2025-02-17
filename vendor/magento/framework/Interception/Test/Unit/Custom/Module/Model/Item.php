<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Framework\Interception\Test\Unit\Custom\Module\Model;

class Item
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Item';
    }
}
