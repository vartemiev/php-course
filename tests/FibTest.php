<?php

namespace MyAppTest;

use PHPUnit\Framework\TestCase;
use MyApp\Fib;

class FibTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testFib($num, $expected): void
    {
        $inst = new Fib();

        $this->assertSame($inst->run($num), $expected);
    }

    public function provider(): array
    {
        return [
            [5, 5],
            [10, 55],
            [23, 28657],
        ];
    }
}
