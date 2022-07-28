<?php

namespace MyAppTest;

use PHPUnit\Framework\TestCase;
use MyApp\BinarySum;

class BinarySumTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testBinarySum($op1, $op2, $expected): void
    {
        $inst = new BinarySum();

        $this->assertSame($inst->run($op1, $op2), $expected);
    }

    public function testBinarySumException(): void
    {
        $inst = new BinarySum();
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
