<?php

namespace MyApp;
use MyApp\Logger;

class BinarySum
{
    public function __construct(Logger\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run(string $a2, string $b2): string
    {
        if (!preg_match('/^[0-1]+$/', $a2) || !preg_match('/^[0-1]+$/', $b2)) {
            $this->logger->err('One of operands or both are invalid');
            throw new \ErrorException('One of operands or both are invalid');
        }

        $a10 = bindec($a2);
        $b10 = bindec($b2);

        $res = decbin($a10 + $b10);
        $this->logger->info('Result is: ' . $res);

        return $res;
    }
}
