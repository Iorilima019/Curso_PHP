<?php
$artista = $_POST['artista'];
$titulo = $_POST['titulo'];
$ano = $_POST['ano'];

    echo "Artista: " . $artista . "<br>";
    echo "Título: " . $titulo . "<br>";
    echo "Ano: " . $ano . "<br>";

$arquivo = fopen('album-db.txt', 'a');
fwrite($arquivo, "$artista - $titulo - $ano\n");
fclose($arquivo);

header("Location: album-formulario.php");
?>