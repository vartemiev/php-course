<?php
function addDigits(int $num)
{
    $sum = 0;

    $stringNum = (string) $num;
    for ($i = 0; $i < strlen($stringNum); $i++) {
        $sum += (int) $stringNum[$i];
    }

    return strlen((string) $sum) > 1 ? addDigits($sum) : $sum;
}
