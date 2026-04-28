<?php
$carrinho = ['arroz' ,
'<br>',
 'Sabão', 
'<br>',
 'Feijão',
'<br>',
  'Balinhas'];
var_dump($carrinho);

echo '<hr>';

array_pop($carrinho);
var_dump($carrinho);

echo'<hr>';

array_shift($carrinho);
var_dump($carrinho);

echo'<hr>';
//remove da memoria um mopvimento do array
unset($carrinho[0]);
var_dump($carrinho);

echo '<hr>';
//adiciona elementos no array
array_push($carrinho, 'Tapete');
array_push($carrinho, 'Rodo');
var_dump($carrinho);

echo'<hr>';
//add em primeiro lugar
array_unshift($carrinho, 'Microondas');
array_unshift($carrinho, 'Tapete');
var_dump($carrinho);

echo'<hr>';

$carrinho = array_unique($carrinho);
var_dump($carrinho);
?>