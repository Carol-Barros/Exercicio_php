<?php

function maior_menor(...$numeros) {
    $numMax = max($numeros);
    $numMin = min($numeros);
    echo "Maior valor: " . $numMax. "<br>" . "Menor valor: " . $numMin;
}
maior_menor(1, 2, 3, 7, 8, 9);
//Escreva uma função que receba um número indeterminado de parâmetro e imprima o maior e o menor deles
?>