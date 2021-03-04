<?php

/**
 * @file
 * Drupal Module: Unomi Connect.
 */

/**
 * Calcula a média.
 *
 * @param array ...$indeterminados
 *   Quantidade indeterminada de parametros.
 */
function calcular_media(...$indeterminados) {

    $soma = array_sum($indeterminados);
    $total = count($indeterminados);
    $media = $soma / $total;
    echo "A média é: $media";   
}
calcular_media(1, 2, 3, 7, 8, 9);
