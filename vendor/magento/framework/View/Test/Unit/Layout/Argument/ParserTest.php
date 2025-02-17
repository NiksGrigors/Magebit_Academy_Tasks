<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Framework\View\Test\Unit\Layout\Argument;

use Magento\Framework\View\Layout\Argument\Parser;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    public function testParse()
    {
        $document = new \DOMDocument();
        $document->load(__DIR__ . '/_files/arguments.xml');
        $parser = new Parser();
        $actual = $parser->parse($document->getElementsByTagName('argument')->item(0));
        $expected = [
            'updater' => ['Updater1', 'Updater2'],
            'param' => [
                'param1' => ['name' => 'param1', 'value' => 'Param Value 1'],
                'param2' => ['name' => 'param2', 'value' => 'Param Value 2'],
            ],
            'Item' => [
                'item1' => ['name' => 'item1', 'value' => 'Item Value 1'],
                'item2' => [
                    'name' => 'item2',
                    'Item' => ['item3' => ['name' => 'item3', 'value' => 'Item Value 2.3']],
                ],
            ],
        ];
        $this->assertSame($expected, $actual);
    }
}
