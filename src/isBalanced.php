<?php
function isBalanced(string $bracketsString)
{
    $openedBracketsCount = 0;
    $stringLen = strlen($bracketsString);

    for ($i = 0; $i < $stringLen; $i++) {
        if ($bracketsString[$i] === '(') {
            $openedBracketsCount++;
        } else if ($openedBracketsCount > 0) {
            $openedBracketsCount--;
        } else {
            return false;
        }
    }

    return true;
}
