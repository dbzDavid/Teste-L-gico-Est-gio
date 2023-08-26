<?php

while (true) {
    fscanf(STDIN, "%d %d", $g, $p); // Lê o número de Grandes Prêmios (g) e o número de pilotos (p)
    if ($g == 0 && $p == 0) {
        break; // Encerra o loop se ambos os valores forem zero
    }
    $corrida = [];
    for ($i = 0; $i < $g; $i++) {
        // Lê os resultados de cada corrida e os armazena na matriz $corrida
        $corrida[$i] = array_map('intval', explode(" ", trim(fgets(STDIN))));
    }
    fscanf(STDIN, "%d", $s); // Lê o número de sistemas de pontuação
    while ($s--) {
        $ponto = array_fill(0, 101, 0); // Inicializa o array de pontos para cada piloto
        $sistema = array_fill(0, 101, 0); // Inicializa o array de pontos do sistema de pontuação
        
        fscanf(STDIN, "%d", $k); // Lê o número de posições pontuadas no sistema
        $sistema = array_map('intval', explode(" ", trim(fgets(STDIN)))); // Lê os pontos do sistema
        
        for ($i = 0; $i < $g; $i++) {
            for ($j = 0; $j < $p; $j++) {
                // Calcula os pontos para cada piloto em cada corrida de acordo com o sistema de pontuação
                $ponto[$j] += $sistema[$corrida[$i][$j] - 1];
            }
        }
        $m = 0;
        for ($i = 0; $i < $p; $i++) {
            // Encontra o máximo de pontos obtidos por um piloto
            if ($ponto[$i] > $m) {
                $m = $ponto[$i];
            }
        }
        $f = true;
        for ($i = 0; $i < $p; $i++) {
            // Encontra os pilotos com o máximo de pontos (pode haver empate)
            if ($ponto[$i] == $m) {
                if ($f) {
                    echo ($i + 1); // Imprime o identificador do piloto campeão
                    $f = false;
                } else {
                    echo " " . ($i + 1); // Imprime o identificador dos pilotos campeões em caso de empate
                }
            }
        }
        echo "\n"; // Imprime uma quebra de linha após cada sistema de pontuação
    }
}

?>