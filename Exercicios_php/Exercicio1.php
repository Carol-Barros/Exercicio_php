<?php 
$numeros=[5,4,7,4,16,8,4,3,9];

function Calcularmedia($numeros)
{
    $total=0;
    $conta=0;
    foreach ($numeros as $valor) {
        $total= $total+ $valor;
        $conta=$conta+1;
      }
      $media=$total/$conta;
      return $media;
    }
    $media=Calcularmedia($numeros);
    //$soma = array_sum (numeros);
    //$total = func_num_args(func_get_args());
    //$media = $soma/$total
    echo "A média é: ".number_format($media,2)."\n";

//Escreva uma função que receba um número indeterminado de parâmetros(números) e retorne a média desses números.

?>
