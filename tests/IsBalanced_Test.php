<?php

use PHPUnit\Framework\TestCase;
use MyApp\IsBalanced;

class IsBalanced_Test extends TestCase
{
    public function testIsBalanced(): void
    {
        $inst = new IsBalanced();

        $this->assertTrue($inst->run('(())'));
        $this->assertTrue($inst->run('((())()())'));
        $this->assertFalse($inst->run(')('));
        $this->assertFalse($inst->run('()())'));
    }
}