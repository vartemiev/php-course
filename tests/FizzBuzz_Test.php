<?php

use PHPUnit\Framework\TestCase;
use MyApp\FizzBuzz;

class FizzBuzz_Test extends TestCase
{
    public function testFizzBuzz(): void
    {
        $inst = new FizzBuzz();

        $this->expectOutputString('1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz ');
        $inst->run(1, 20);
    }
}