<?php

namespace MyApp;

class IsBalanced
{
    public function run(string $bracketsString): bool
    {
        $openedBracketsCount = 0;
        $stringLen = strlen($bracketsString);

        for ($i = 0; $i < $stringLen; $i++) {
            if ($bracketsString[$i] === '(') {
                $openedBracketsCount++;
            } elseif ($openedBracketsCount > 0) {
                $openedBracketsCount--;
            } else {
                return false;
            }
        }

        return true;
    }
}
