<?php

namespace MyApp\Logger;

class Logger extends AbstractLogger
{
    private function log(string $message): void
    {
        echo $message . PHP_EOL;
    }

    public function info(string $message): void
    {
        $this->log('[INFO]: ' . $message);
    }

    public function err(string $message): void
    {
        $this->log('[ERR]: ' . $message);
    }

    public function warn(string $message): void
    {
        $this->log('[WARN]: ' . $message);
    }
}