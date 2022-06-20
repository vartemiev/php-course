<?php
$cache = [0, 1, 1];

$fib = function($num) use($cache)
{
    if (isset($cache[$num])) {
        return $cache[$num];
    }

    for ($i = count($cache); $i <= $num; $i++) {
        $cacheLen = count($cache);
        $cache[] = $cache[$cacheLen - 1] + $cache[$cacheLen - 2];
    }

    return $cache[count($cache) - 1];
};
