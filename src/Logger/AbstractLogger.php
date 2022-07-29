<?php

namespace MyApp\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    public function info(string $message): void
    {
    }

    public function err(string $message): void
    {
    }

    public function warn(string $message): void
    {
    }
}