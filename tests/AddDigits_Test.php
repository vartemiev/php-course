<?php

use PHPUnit\Framework\TestCase;
use MyApp\AddDigits;

class AddDigits_Test extends TestCase
{
    public function testAddDigits(): void
    {
        $inst = new AddDigits();

        $this->assertSame($inst->run(12), 3);
        $this->assertSame($inst->run(125), 8);
        $this->assertSame($inst->run(12535), 7);
    }
}