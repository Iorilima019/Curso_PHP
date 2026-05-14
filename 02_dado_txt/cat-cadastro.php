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


$arquivo = fopen('gatos-DB.txt', 'a');
fwrite($arquivo, "$nome \t $raca \t $idade \t $pelagem \t $gen \t $cast\n");
fclose($arquivo);


?>