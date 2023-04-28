<?php

function ordenar(array $arr): array
{
    
    $ordenarFrequencia = fn($a, $b) => $a['count'] <=> $b['count'];
    $ordenarValor = fn($a, $b) => $a['value'] <=> $b['value'];
    $counts = array_count_values($arr);
    $countsArray = array_map(fn($value, $count) => ['value' => $value, 'count' => $count], array_keys($counts), $counts);
    usort($countsArray, fn($a, $b) => $ordenarFrequencia($a, $b) ?: $ordenarValor($a, $b));

    $arrayOrdenado = [];
    foreach ($countsArray as $counts) {
        $value = $counts['value'];
        $count = $counts['count'];
        for ($i = 0; $i < $count; $i++) {
            $arrayOrdenado[] = $value;
        }
    }

    return $arrayOrdenado;
}


$n = 10;
$arr = [8, 5, 5, 5, 5, 1, 1, 1, 4, 4];


$arrayOrdenado =  ordenar($arr);

print_r($arrayOrdenado);