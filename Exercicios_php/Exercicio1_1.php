<?php 
$numeros=[5,4,7,4,16,8,4,3,9];
function Calcularmedia($numeros)
{
    $total=0;
    
    foreach ($numeros as $valor) {
        $total= $total+ $valor;
        
      }
      $media=$total/count($numeros);
      return $media;
    }
    $media=Calcularmedia($numeros);
    echo "A média é: ".number_format($media,2)."\n";

?>
