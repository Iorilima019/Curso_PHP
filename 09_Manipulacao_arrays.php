<?php
$carrinho =[
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata'
];
echo '<pre>';
//ordem decrecente
arsort($carrinho);
var_dump($carrinho);

echo'<hr>';
//ordem cressente
asort($carrinho);
var_dump($carrinho);

echo'<hr>';
//
sort($carrinho);
var_dump($carrinho);
?>