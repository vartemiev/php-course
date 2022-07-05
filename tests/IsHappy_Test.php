<?php

use PHPUnit\Framework\TestCase;
use MyApp\IsHappy;

class IsHappy_Test extends TestCase
{
    public function testIsHappy(): void
    {
        $inst = new IsHappy();

        $this->assertTrue($inst->run('234711'));
        $this->assertTrue($inst->run('2332'));
        $this->assertFalse($inst->run('231715'));
    }

    public function testIsHappyException(): void
    {
        $inst = new IsHappy();
        $this->expectException(ErrorException::class);
        $this->expectExceptionMessage('Ticket number should contain even number of digits ');

        $inst->run('23471');
    }
}