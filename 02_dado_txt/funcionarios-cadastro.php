<?php
    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $numeDepen = $_POST['numeDepen'];
    $estado = $_POST['estado'];
    $casado = $_POST['casado'];
    $necessitaAdap = $_POST['necessitaAdap'];

$arquivo = fopen('funcionarios-DB.txt', 'a');
fwrite($arquivo, "$nome \t $fone \t $numeDepen \t $estado \t $casado \t $necessitaAdap \t $descricao\n");
fclose($arquivo);

    echo "Nome: " . $nome . "<br>";
    echo "Telefone: " . $fone . "<br>";
    echo "Número de Dependentes: " . $numeDepen . "<br>";
    echo "Estado: " . $estado . "<br>";
    echo "Casado: " . ($casado === 'sim' ? 'Sim' : 'Não') . "<br>";
    echo "Necessita de adaptação para o trabalho: " . ($necessitaAdap === 'sim' ? 'Sim' : 'Não') . "<br>";
    echo "Descrição: " . $descricao . "<br>";
?>