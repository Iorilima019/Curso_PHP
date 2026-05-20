<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Álbum</h1>
    <form action="album-salvar.php" method="post">
        <label for="Artista">Artista: </label>
        <input type="text" name="artista" id="artista"><br><br>

        <label for="Nome do álbum">Título: </label>
        <input type="text" name="titulo" id="titulo"><br><br>
        
        <label for="Ano de lançamento">Ano: </label>
        <input type="number" name="ano" id="ano"><br><br>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
    <hr>
    <h2>Listagem de Álbuns</h2>
    <?php
    $arquivo = fopen("album-db.txt", 'r');
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha <br>";
    }
    fclose($arquivo);


    /*
    $arquivo = "album-db.txt";
    $arquivo_aberto = fopen($arquivo, 'r');
    $conteudo = fread($arquivo_aberto, filesize($arquivo));
    echo $conteudo;
    fclose($arquivo_aberto);
    */
    ?>

</body>
</html>