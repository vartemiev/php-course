<?php

namespace MyAppTest;

use PHPUnit\Framework\TestCase;
use MyApp\IsPowerOfThree;

class IsPowerOfThreeTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testIsPowerOfTree($num, $expected): void
    {
        $inst = new IsPowerOfThree();

        $this->assertEquals($inst->run($num), $expected);
    }

    public function provider(): array
    {
        return [
            [81, true],
            [27, true],
            [21, false],
        ];
    }
}
