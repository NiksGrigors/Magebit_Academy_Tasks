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

class SystemConfigDeveloper
{
    public const XML_PATH_MOBILE_USERAGENT_REGEX = 'hyva_themes_checkout/developer/mobile_useragent_regex';

    protected ScopeConfigInterface $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getMobileUserAgentRegex(): string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_MOBILE_USERAGENT_REGEX, ScopeInterface::SCOPE_STORE);
    }
}
