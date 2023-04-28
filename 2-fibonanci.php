<?php

function fibonacci(int $n): array {
    $arr = [0, 1];

    for ($i = 2; $i < $n ; $i++) {
        $arr[$i] = $arr[$i-2] + $arr[$i-1];
    }

    return array_slice($arr, 0, $n);
}

print_r(fibonacci(1));