<?php

namespace MyApp;

class BinarySum
{
    public function run(string $a2, string $b2): string
    {
        if (!preg_match('/^[0-1]+$/', $a2) || !preg_match('/^[0-1]+$/', $b2)) {
            throw new \ErrorException('One of operands or both are invalid');
        }

        $a10 = bindec($a2);
        $b10 = bindec($b2);

        return decbin($a10 + $b10);
    }
}
