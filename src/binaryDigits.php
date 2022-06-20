<?php

function binarySum (string $a2, string $b2)
{
    $isFirstOperandIncorrect = ((int) $a2 === 0 && $a2 !== '0') || (int) $a2 < 0;
    $isSecondOperandIncorrect = ((int) $b2 === 0 && $b2 !== '0') || (int) $b2 < 0;

    if ($isFirstOperandIncorrect || $isSecondOperandIncorrect) {
        throw new ErrorException('One of operands or both are invalid');
    }

    $a10 = bindec($a2);
    $b10 = bindec($b2);

    return decbin($a10 + $b10);
}
