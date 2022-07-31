<?php

namespace MyApp;

class Fib
{
    public function run(int $num): int
    {
        static $cache = [0, 1, 1];

        if (isset($cache[$num])) {
            return $cache[$num];
        }

        for ($i = count($cache); $i <= $num; $i++) {
            $cache[] = $cache[$i - 1] + $cache[$i - 2];
        }

        return $cache[$i - 1];
    }
}
