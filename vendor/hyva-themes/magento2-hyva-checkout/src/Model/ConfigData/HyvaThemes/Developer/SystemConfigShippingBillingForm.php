<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\Model\ConfigData\HyvaThemes\Developer;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class SystemConfigShippingBillingForm
{
    public const XML_PATH_AUTOSAVE_TIMEOUT = 'hyva_themes_checkout/developer/shipping_billing_form/autosave_timeout';

    protected ScopeConfigInterface $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getAutoSaveTimeout(): int
    {
        return $this->scopeConfig->getValue(self::XML_PATH_AUTOSAVE_TIMEOUT, ScopeInterface::SCOPE_STORE) ?? 3000;
    }
}
