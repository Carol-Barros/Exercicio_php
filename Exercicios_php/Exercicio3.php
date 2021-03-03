<html>
 <head>
  <title>Exercicio3</title>
 </head>
 <body>
 <form action="" method="get">
  Temperatura:  <input type="number" name="numero" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
</html>
<?php
$temperatura = $_GET['numero'];
function converte($temperatura)
{
    $farenheit  = (($temperatura * 9)/5) + 32;
    return $farenheit;
}
$resultado = converte($temperatura);
echo "A temperatura em Farenheit é: $resultado\n";
//Escreva uma função que receba graus Celsius e converta para Farenheit.
//(C x 9) / 5) + 32
?>
 </body>
</html>
