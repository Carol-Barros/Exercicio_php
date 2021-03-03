<html>
 <head>
  <title>Exercicio6</title>
 </head>
 <body>
 <form action="" method="get">
  Dia:  <input type="number" name="numero" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
</html>
<?php
$numDia = $_GET['numero'];
$resultado = diaDaSemana($numDia);
function diaDaSemana($numDia) 
{
    $dia = ["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado"];
    if ($numDia >=1 && $numDia<=7) 
    {
        echo $dia[$numDia -1];
    } 
    else
    {
        echo "Dia inválido";
    }
}
?>
 </body>
</html>