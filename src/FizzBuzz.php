<?php

namespace MyApp;

class FizzBuzz
{
    public function run(int $begin, int $end): void
    {
        for ($i = $begin; $i <= $end; $i++) {
            if ($i % 15 === 0) {
                print_r('FizzBuzz ');
            } elseif ($i % 3 === 0) {
                print_r('Fizz ');
            } elseif ($i % 5 === 0) {
                print_r('Buzz ');
            } else {
                print_r($i . ' ');
            }
        }
    }
}
