<?php
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];

    echo "Nome: " . $nome . "<br>";
    echo "Descrição: " . $descricao . "<br>";
    echo "Data: " . $data . "<br>";

$arquivo = fopen('eventos-db.txt', 'a');
fwrite($arquivo, "$nome - $descricao - $data\n");
fclose($arquivo);
header("Location: eventos-forme.php");
?>