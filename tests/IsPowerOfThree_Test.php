<?php

use PHPUnit\Framework\TestCase;
use MyApp\IsPowerOfThree;

class IsPowerOfThree_Test extends TestCase
{
    public function testIsPowerOfTree(): void
    {
        $inst = new IsPowerOfThree();

        $this->assertTrue($inst->run(81));
        $this->assertTrue($inst->run(27));
        $this->assertFalse($inst->run(21));
    }
}