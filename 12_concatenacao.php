<?php
$var1 = 'Ana';
$var2 = 'Fecchio';

//echo $var1 .' '. $var2 . ' '. 12;

$var3 = $var1 .' '. $var2 . ' '. 19;
//echo $var3;

$nome = 'Rubens Pereira';
$empresa = 'Senac Americana';

//echo 'O '.$nome.' é fundador da Empresa: '.$empresa; 
echo "O {$nome} é fundador da Empresa: {$empresa}";
echo '<br>';

echo 'O CEO ' .$nome.' investiu todas as ações da Empresa: ' .$empresa.'em bets e em jogos de azar';
?>