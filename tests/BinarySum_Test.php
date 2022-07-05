<?php

use PHPUnit\Framework\TestCase;
use MyApp\BinarySum;

class BinarySum_Test extends TestCase
{
    public function testBinarySum(): void
    {
        $inst = new BinarySum();

        $this->assertSame($inst->run('101', '1001'), '1110');
        $this->assertSame($inst->run('11', '1001'), '1100');
        $this->assertSame($inst->run('110001', '101'), '110110');
    }

    public function testBinarySumException(): void
    {
        $inst = new BinarySum();
        $this->expectException(ErrorException::class);
        $this->expectExceptionMessage('One of operands or both are invalid');

        $inst->run('201', '34');
    }
}