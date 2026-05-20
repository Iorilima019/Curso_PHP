<?php
    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $fumante = isset($_POST['fumante']) ? $_POST['fumante'] : null;

$arquivo = fopen('pacientes-db.txt', 'a');
fwrite($arquivo, "$nome - $fone - $cidade - $estado - $fumante\n");
fclose($arquivo);
header("Location: pacientes-forme.php");

    echo "Nome: " . $nome . "<br>";
    echo "Telefone: " . $fone . "<br>";
    echo "Cidade: " . $cidade . "<br>";
    echo "Estado: " . $estado . "<br>";
    echo "Fumante: " . ($fumante === 'sim' ? 'Sim' : 'Não') . "<br>";
?>