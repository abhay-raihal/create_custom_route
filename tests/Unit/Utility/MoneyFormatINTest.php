<?php

namespace RZP\Tests\Unit\Utility;

use RZP\Tests\TestCase;

class MoneyFormatINTest extends TestCase
{
    /**
     * @param  string $expected
     * @param  string $number
     *
     * @dataProvider getMoneyFormatINTestData
     */
    public function testMoneyFormatIN(string $expected, string $number)
    {
        $this->assertSame($expected, money_format_IN($number));
    }

    public function getMoneyFormatINTestData(): array
    {
        return [
            // [Expected]           [Number]
            ['0',                   '0'],
            ['1',                   '1'],
            ['12',                  '12'],
            ['123',                 '123'],
            ['1,234',               '1234'],
            ['12,345',              '12345'],
            ['1,23,456',            '123456'],
            ['12,34,567',           '1234567'],
            ['1,23,45,678',         '12345678'],
            ['12,34,56,789',        '123456789'],
            ['1,23,45,67,890',      '1234567890'],

            ['0.00',                '0.00'],
            ['0.19',                '0.19'],
            ['0.199',               '0.199'],
            ['0.89',                '0.89'],
            ['0.899',               '0.899'],

            ['12,345.00',           '12345.00'],
            ['12,345.000',          '12345.000'],
            ['12,345.19',           '12345.19'],
            ['12,345.199',          '12345.199'],
            ['12,345.89',           '12345.89'],
            ['12,345.899',          '12345.899'],

            ['-1',                  '-1'],
            ['-12',                 '-12'],
            ['-123',                '-123'],
            ['-1,234',              '-1234'],
            ['-12,345',             '-12345'],
            ['-1,23,456',           '-123456'],
            ['-12,34,567',          '-1234567'],
            ['-1,23,45,678',        '-12345678'],
            ['-12,34,56,789',       '-123456789'],
            ['-1,23,45,67,890',     '-1234567890'],


            ['-0.00',               '-0.00'],
            ['-0.19',               '-0.19'],
            ['-0.199',              '-0.199'],
            ['-0.89',               '-0.89'],
            ['-0.899',              '-0.899'],

            ['-12,345.19',          '-12345.19'],
            ['-12,345.199',         '-12345.199'],
            ['-12,345.89',          '-12345.89'],
            ['-12,345.899',         '-12345.899'],
        ];
    }
}