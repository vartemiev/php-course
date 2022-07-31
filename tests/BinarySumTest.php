<?php

namespace MyAppTest;

use PHPUnit\Framework\TestCase;
use MyApp\BinarySum;
use MyApp\Logger\FakeLogger;

class BinarySumTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testBinarySum($op1, $op2, $expected): void
    {
        $inst = new BinarySum(new FakeLogger());

        $this->assertSame($inst->run($op1, $op2), $expected);
    }

    public function testBinarySumException(): void
    {
        $inst = new BinarySum(new FakeLogger());
        $this->expectException(\ErrorException::class);
        $this->expectExceptionMessage('One of operands or both are invalid');

        $inst->run('201', '34');
    }

    public function provider(): array
    {
        return [
            ['101', '1001', '1110'],
            ['11', '1001', '1100'],
            ['110001', '101', '110110'],
        ];
    }
}
