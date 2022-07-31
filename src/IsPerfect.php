<?php

namespace MyApp;

class IsPerfect
{
    public function run(int $num): bool
    {
        $dividers = [1];

        $mid = $num % 2 === 0 ? $num / 2 : ($num - 1) / 2;
        $i = 2;

        while ($i < $mid && !in_array($i, $dividers)) {
            if ($num % $i === 0) {
                $dividers[] = $i;
                $dividers[] = $num / $i;
            }
            $i++;
        }

        return array_sum($dividers) === $num;
    }
}
