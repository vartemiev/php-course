<?php
function isPowerOfThree(int $num)
{
    if ($num < 0) {
        return false;
    }

    while (is_int($num) && $num > 1) {
        $num = $num / 3;
    }

    return $num === 1;
}
