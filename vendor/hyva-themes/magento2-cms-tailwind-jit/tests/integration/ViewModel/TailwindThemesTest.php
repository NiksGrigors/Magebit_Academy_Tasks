<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2020-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\CmsTailwindJit\ViewModel;

use Magento\TestFramework\ObjectManager;
use PHPUnit\Framework\TestCase;

class TailwindThemesTest extends TestCase
{
    /**
     * @magentoConfigFixture default_store design/theme/theme_id 5
     */
    public function testDeterminesNonHyvaTheme(): void
    {
        /** @var TailwindThemes $sut */
        $sut = ObjectManager::getInstance()->create(TailwindThemes::class);
        $this->assertSame([1 => 'frontend/Hyva/default'], $sut->getStoreIdToTailwindThemeMap());
    }
}
