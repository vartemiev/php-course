<?php

namespace MyAppTest;

use PHPUnit\Framework\TestCase;
use MyApp\IsHappy;

class IsHappyTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testIsHappy($num, $expected): void
    {
        $inst = new IsHappy();

        $this->assertEquals($inst->run($num), $expected);
    }

    public function testIsHappyException(): void
    {
        $inst = new IsHappy();
        $this->expectException(\ErrorException::class);
        $this->expectExceptionMessage('Ticket number should contain even number of digits ');

        $inst->run('23471');
    }

    public function provider(): array
    {
        return [
            ['234711', true],
            ['2332', true],
            ['231715', false],
        ];
    }
}
