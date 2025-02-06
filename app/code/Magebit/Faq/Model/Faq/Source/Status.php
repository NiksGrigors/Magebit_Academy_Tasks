<?php

namespace Magebit\Faq\Model\Faq\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Status implements OptionSourceInterface
{
    private const STATUS_ENABLED = 1;
    private const STATUS_DISABLED = 0;

    /**
     * @return array[]
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => self::STATUS_ENABLED,
                'label' => __('Enabled')
            ],
            [
                'value' => self::STATUS_DISABLED,
                'label' => __('Disabled')
            ]
        ];
    }
}
