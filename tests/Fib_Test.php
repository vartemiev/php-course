<?php

use PHPUnit\Framework\TestCase;
use MyApp\Fib;

class Fib_Test extends TestCase
{
    public function testFib(): void
    {
        $inst = new Fib();

        $this->assertSame($inst->run(5), 5);
        $this->assertSame($inst->run(10), 55);
        $this->assertSame($inst->run(23), 28657);
    }
}