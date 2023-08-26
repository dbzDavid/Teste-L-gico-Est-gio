<?php
for ($i = 1; $i <= 50; $i++) {            // Loop que percorre de 1 a 50
    if ($i % 3 == 0) {                    // Identifica se o número é múltiplo de 3
        echo "Fizz";                      // Imprime "Fizz" se for múltiplo de 3
    }
    elseif ($i % 5 == 0) {                // Identifica se o número é múltiplo de 5
        echo "Buzz";                      // Imprime "Buzz" se for múltiplo de 5
    }
    elseif ($i % 3 == 0 && $i % 5 == 0) { // Identifica se o número é múltiplo de 3 e 5
        echo "FizzBuzz";                  // Imprime "FizzBuzz" se for múltiplo de 3 e 5
    }
    else {                                // Se o número não for múltiplo de 3 e 5, imprime o próprio número
        echo $i;
    }
    echo "\n";                            // Pula para a próxima linha
}
?>