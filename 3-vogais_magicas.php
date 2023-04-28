<?php


function sequencia_magica(string $s): int {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $qtd_vogais = [0, 0, 0, 0, 0];
    $tam_s = strlen($s);
    $tam_max = 0;
    $idx_vogal = 0;
    
    for ($i = 0; $i < $tam_s; $i++) {
        $letra = $s[$i];
        
        if ($letra == $vogais[$idx_vogal]) {
            $qtd_vogais[$idx_vogal]++;
            
            if ($idx_vogal < 4) {
                $idx_vogal++;
            }
        }
    }
    
    foreach ($qtd_vogais as $qtd) {
        if ($qtd == 0) {
            return 0;
        }
        
        if ($qtd > $tam_max) {
            $tam_max = $qtd;
        }
    }
    
    return $tam_max;
}
