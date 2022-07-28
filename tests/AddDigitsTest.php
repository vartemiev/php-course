<?php

namespace MyAppTest;

use PHPUnit\Framework\TestCase;
use MyApp\AddDigits;

class AddDigitsTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAddDigits($num, $expected): void
    {
        $inst = new AddDigits();

        $this->assertSame($inst->run($num), $expected);
    }

    public function provider(): array
    {
        return [
            [12, 3],
            [125, 8],
            [12535, 7],
        ];
    }
}
