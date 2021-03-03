<html>
 <head>
  <title>Exercicio4 </title>
 </head>
 <body>
 <form action="" method="get">
  Metros:  <input type="number" name="numero" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
</html>
<?php
$metros = $_GET['numero'];
function convert($metros) 
{
    $centimetros = ($metros*100);
    return $centimetros;
}
$resultado = convert($metros);
echo "$metros são  $resultado\n";

// Escreva uma função que converta metros para centímetros.
?>
 </body>
</html>
