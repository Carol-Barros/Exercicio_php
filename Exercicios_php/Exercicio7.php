
<html>
 <head>
  <title>Exercicio7</title>
 </head>
 <body>
 <form action="" method="get">
  Lado 1:  <input type="number" name="numero1" /><br />
  Lado 2:  <input type="number" name="numero2" /><br />
  Lado 3:  <input type="number" name="numero3" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
</html>
<?php 
  $lado1 = $_GET['numero1'];
  $lado2 = $_GET['numero2'];
  $lado3 = $_GET['numero3'];

if ( ($lado1+$lado2>$lado3) && ($lado1+$lado3>$lado2) && ($lado2+$lado3>$lado1) )
{  
        if ($lado1==$lado2 && $lado1==$lado3)   
        echo "Equilátero";
        elseif ($lado1==$lado2 || $lado1==$lado3 || $lado2==$lado3)
        echo "Isósceles";
else
        echo "Escaleno";
}
else      
        echo "Valores invalidos";
?>
 </body>
</html>