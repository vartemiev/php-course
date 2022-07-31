<?php

namespace MyApp;
use MyApp\Logger\Logger;

require 'vendor/autoload.php';

$binSum = new BinarySum(new Logger());

try {
    $binSum->run('101', '1001');
    $binSum->run('123', '1001');
} catch (\ErrorException $e) {
    echo $e;
}
