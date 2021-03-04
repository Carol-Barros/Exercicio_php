<?php $numero = $_GET['numero']; ?>
<html>
 <head>
  <title>Exercicio2</title>
 </head>
 <body>
 <form action="" method="get">
  Cpf:  <input type="text" value="<?=$numero?>" name="numero" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
</html>
<?php

function validaCpf($numero)
{
    $cpf = preg_replace('/[^0-9]/', "", $numero);
   
    if (strlen($cpf) !== 11) 
    {
        return false;
    }  
   
    $number_quantity_to_loop = [9, 10];
    $cpfcompara = substr($cpf, 0, 9);
    foreach ($number_quantity_to_loop as $item) 
    {
        $sum = 0;
        $number_to_multiplicate = $item + 1;
  
        for ($index = 0; $index < $item; $index++) {

            $sum += $cpf[$index] * ($number_to_multiplicate--);
    
        }

        $result = (($sum * 10) % 11);
        if ($result == 10 || $result == 11)
        {
            $result = 0;
        }

        $cpfcompara .= $result;
        
    }

    $cpf_invalido = [
        '00000000000',
        '11111111111',
        '22222222222',
        '33333333333',
        '44444444444',
        '55555555555',
        '66666666666',
        '77777777777',
        '88888888888',
        '99999999999'
    ];
        
    if (in_array($cpf,$cpf_invalido))
    {
        return false;
    }


    if ($cpfcompara != $cpf)
    {
        return false;
    }
    
    return true;  
}
echo validaCpf($numero) ? "valido" : "invalido"; 



?>
 </body>
</html>