<?php
$nome = $_POST['nome'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];
$pelagem = $_POST['pelagem'];
$gen = $_POST['gen'];
$cast = $_POST['cast'];

    echo "Nome: " . $nome . "<br>";
    echo "Raça: " . $raca . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Pelagem: " . $pelagem . "<br>";
    echo "Gênero: " . $gen . "<br>";
    echo "Castrado: " . $cast . "<br>";


$arquivo = fopen('gatos-db.txt', 'a');
fwrite($arquivo, "$nome - $raca - $idade - $pelagem - $gen - $cast\n");
fclose($arquivo);

header("Location: cat-formulario.php");
?>