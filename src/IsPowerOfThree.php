<?php

namespace MyApp;

class IsPowerOfThree
{
    public function run(int $num): bool
    {
        if ($num < 0) {
            return false;
        }

        while (is_int($num) && $num > 1) {
            $num = $num / 3;
        }

        return $num === 1;
    }
}
