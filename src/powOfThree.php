<?php
function isPowerOfThree(int $num)
{
    if ($num < 0) {
        throw new ErrorException('Passed number can not be a natural power of three');
    }

    while (is_int($num) && $num > 1) {
        $num = $num / 3;
    }

    return $num === 1;
}
