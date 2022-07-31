<?php

namespace MyAppTest;

use PHPUnit\Framework\TestCase;
use MyApp\IsBalanced;

class IsBalancedTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testIsBalanced($bracketsString, $expected): void
    {
        $inst = new IsBalanced();

        $this->assertEquals($inst->run($bracketsString), $expected);
    }

    public function provider(): array
    {
        return [
            ['(())', true],
            ['((())()())', true],
            [')(', false],
            ['()())', false],
        ];
    }
}
