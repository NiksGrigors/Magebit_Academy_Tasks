<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\Model\ConfigData\HyvaThemes;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class SystemConfigDesign
{
    public const XML_PATH_UNIVERSAL_ICON_WIDTH = 'hyva_themes_checkout/design/shipping_payment_methods/universal_icon_width';
    public const XML_PATH_UNIVERSAL_ICON_HEIGHT = 'hyva_themes_checkout/design/shipping_payment_methods/universal_icon_height';

    protected ScopeConfigInterface $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getUniversalIconWidth(): int
    {
        return (int) $this->scopeConfig->getValue(self::XML_PATH_UNIVERSAL_ICON_WIDTH, ScopeInterface::SCOPE_STORE) ?? 44;
    }

    public function getUniversalIconHeight(): int
    {
        return (int) $this->scopeConfig->getValue(self::XML_PATH_UNIVERSAL_ICON_HEIGHT, ScopeInterface::SCOPE_STORE) ?? 44;
    }
}
