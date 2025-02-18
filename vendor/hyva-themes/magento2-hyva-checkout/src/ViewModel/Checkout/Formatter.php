<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\ViewModel\Checkout;

use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Formatter implements ArgumentInterface
{
    protected PriceCurrencyInterface $priceCurrency;

    /**
     * @param PriceCurrencyInterface $priceCurrency
     */
    public function __construct(
        PriceCurrencyInterface $priceCurrency
    ) {
        $this->priceCurrency = $priceCurrency;
    }

    /**
     * Format currency.
     *
     * @param $amount
     * @param bool $includeContainer
     * @param int $precision
     * @return string
     */
    public function currency(
        $amount,
        bool $includeContainer = false,
        int $precision = PriceCurrencyInterface::DEFAULT_PRECISION
    ): string {
        return $this->priceCurrency->format($amount, $includeContainer, $precision);
    }
}
