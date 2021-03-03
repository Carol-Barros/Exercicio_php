<?php
function calcularMedia() {
    $indeterminados = func_get_args();
    
        $soma = array_sum($indeterminados);
        $total = count($indeterminados);
        $media = $soma / $total;
        echo "A média é: $media";   
}
calcularMedia(1, 2, 3, 7, 8, 9);
?>