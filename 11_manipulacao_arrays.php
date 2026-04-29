<?php

echo '<pre>';

$nomes = ['Rudens', 'Senac', 'Americana'];
/*
var_dump($nomes);
$nomes [0] = strtoupper($nomes [0]);
$nomes [1] = strtoupper($nomes [1]);
$nomes [2] = strtoupper($nomes [2]);
*/

$nomes = array_map('transformarParaMaiuscula', $nomes);

function transformarParaMaiuscula($valor)
{
    return strtoupper($valor);
}

var_dump($nomes);
?>