<?php
$ra = $_POST['RA'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

    echo "RA: " . $ra . "<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";

$arquivo = fopen('aluno-db.txt', 'a');
fwrite($arquivo, "$ra - $nome - $idade\n");
fclose($arquivo);
header("Location: aluno-forme.php");
?>