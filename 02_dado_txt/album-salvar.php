<?php
$artista = $_POST['artista'];
$titulo = $_POST['titulo'];
$ano = $_POST['ano'];

    echo "Artista: " . $artista . "<br>";
    echo "Título: " . $titulo . "<br>";
    echo "Ano: " . $ano . "<br>";

$arquivo = fopen('album-DB.txt', 'a');
fwrite($arquivo, "$artista \t $titulo \t $ano\n");
fclose($arquivo);
?>