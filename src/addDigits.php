<?php
function addDigits(int $num)
{
    $sum = 0;
    $stringNum = (string)$num;

    $stringLen = strlen($stringNum);
    for ($i = 0; $i < $stringLen; $i++) {
        $sum += (int)$stringNum[$i];
    }

    return strlen((string)$sum) > 1 ? addDigits($sum) : $sum;
}
