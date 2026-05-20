<?php
    $nomePrato = $_POST['nomePrato'];
    $codigo = $_POST['codigo'];
    $categoria = $_POST['categoria'];
    $vegetariano = $_POST['vegetariano'];
    $vegano = $_POST['vegano'];

    $arquivo = fopen('pratos-db.txt', 'a');
    fwrite($arquivo, "$nomePrato - $codigo - $categoria - $vegetariano - $vegano\n");
    fclose($arquivo);
    header("Location: pratos-forme.php");

    echo "Nome do prato: " . $nomePrato . "<br>";
    echo "Código do prato: " . $codigo . "<br>";
    echo "Categoria: " . $categoria . "<br>";
    echo "Vegetariano: " . ($vegetariano === 'sim' ? 'Sim' : 'Não') . "<br>";
    echo "Vegano: " . ($vegano === 'sim' ? 'Sim' : 'Não') . "<br>";
?>