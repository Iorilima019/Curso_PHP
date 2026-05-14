<?php
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];

    echo "Nome: " . $nome . "<br>";
    echo "Descrição: " . $descricao . "<br>";
    echo "Data: " . $data . "<br>";

$arquivo = fopen('eventos-DB.txt', 'a');
fwrite($arquivo, "$nome \t $descricao \t $data\n");
fclose($arquivo);
?>