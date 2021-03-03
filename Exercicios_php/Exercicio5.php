<?php

$numeros=[5,4,7,4,16,8,4,3,9];
//$numeros = func_get_args();
function maiorMenor($numeros)
{
$numMax = max($numeros);
$numMin = min($numeros);
return array($numMax,$numMin);

}
$valores = maiorMenor($numeros);
echo "Maior valor: " . $valores[0] . "<br>" . "Menor valor: " . $valores[1];

//Escreva uma função que receba um número indeterminado de parâmetro e imprima o maior e o menor deles.

?>