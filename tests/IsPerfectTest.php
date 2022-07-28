<?php

namespace MyAppTest;

use PHPUnit\Framework\TestCase;
use MyApp\IsPerfect;

class IsPerfectTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testIsPerfect($num, $expected): void
    {
        $inst = new IsPerfect();

        $this->assertEquals($inst->run($num), $expected);
    }

    public function provider(): array
    {
        return [
            [496, true],
            [8128, true],
            [34, false],
            [4653, false],
        ];
    }
}
