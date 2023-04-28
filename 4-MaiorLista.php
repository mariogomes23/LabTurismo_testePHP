<?php


function valorMaximo($m, $n, $lista) {
    $arr = array_fill(0, $m+1, 0); // inicializa o array com 0s

    foreach($lista as [$a, $b, $v]) {
        for($j=$a; $j<=$b; $j++){
            $arr[$j] += $v;
        }
    }

    sort($arr);
    return $arr[$m];
}

// Exemplo de uso
$lista = array(
    array(1, 2, 10),
    array(2, 4, 5),
    array(3, 5, 12)
);

echo valorMaximo(4, 3, $lista); // imprime 17