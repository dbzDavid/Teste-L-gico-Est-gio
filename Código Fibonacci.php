<?php
$n1 = 0;                       // Primeiro número da sequência
$n2 = 1;                       // Segundo número da sequência

echo $n1;                      // Imprime o primeiro número

for ($i = 1; $i < 40; $i++) {  // Loop que percorre de 1 a 40
    echo ", " . $n2;           // Imprime uma vírgula seguida do próximo número
    $soma = $n1 + $n2;         // Calcula o próximo número somando os dois últimos
    $n1 = $n2;                 // Atualiza o primeiro número com o valor do segundo
    $n2 = $soma;               // Atualiza o segundo número com o valor do próximo número
}
?>