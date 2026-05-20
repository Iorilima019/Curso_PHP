<?php
    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $numeDepen = $_POST['numeDepen'];
    $estado = $_POST['estado'];
    $casado = $_POST['casado'];
    $necessitaAdap = $_POST['necessitaAdap'];
    $descricao = $_POST['descricao'];

$arquivo = fopen('funcionarios-db.txt', 'a');
fwrite($arquivo, "$nome - $fone - $numeDepen - $estado - $casado - $necessitaAdap - $descricao\n");
fclose($arquivo);
header("Location: funcionarios-forme.php");

    echo "Nome: " . $nome . "<br>";
    echo "Telefone: " . $fone . "<br>";
    echo "Número de Dependentes: " . $numeDepen . "<br>";
    echo "Estado: " . $estado . "<br>";
    echo "Casado: " . ($casado === 'sim' ? 'Sim' : 'Não') . "<br>";
    echo "Necessita de adaptação para o trabalho: " . ($necessitaAdap === 'sim' ? 'Sim' : 'Não') . "<br>";
    echo "Descrição: " . $descricao . "<br>";
?>