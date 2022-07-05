<?php

namespace MyApp;

class AddDigits
{
    public function run(int $num): int
    {
        $sum = 0;
        $stringNum = (string)$num;

        $stringLen = strlen($stringNum);
        for ($i = 0; $i < $stringLen; $i++) {
            $sum += (int)$stringNum[$i];
        }

        return strlen((string)$sum) > 1 ? $this->run($sum) : $sum;
    }
}
