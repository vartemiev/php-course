<?php

use PHPUnit\Framework\TestCase;
use MyApp\IsPerfect;

class IsPerfect_Test extends TestCase
{
    public function testIsPerfect(): void
    {
        $inst = new IsPerfect();

        $this->assertTrue($inst->run(496));
        $this->assertTrue($inst->run(8128));
        $this->assertFalse($inst->run(34));
        $this->assertFalse($inst->run(4653));
    }
}