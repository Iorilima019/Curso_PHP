<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Cadastro de Pratos</h1>
    <form action="pratos-cadastro.php" method="post">
        <label for="Nome do prato">Nome do prato: </label>
        <input type="text" name="nomePrato" id="nomePrato"><br><br>

        <label for="Codigo">Codigo do prato: </label>
        <input type="text" name="codigo" id="codigo"><br><br>

        <label for="Categoria">Categoria: </label>
        <input type="text" name="categoria" id="categoria"><br><br>

        <label for="Vegetariano">Vegetariano? </label>
        <input type="radio" name="vegetariano" id="vegetariano" value="sim">
        <label for="vegetariano">Sim</label>
        <input type="radio" name="vegetariano" id="vegetariano" value="nao">
        <label for="vegetariano">Não</label><br><br>

        <label for="Vegano">Vegano? </label>
        <input type="radio" name="vegano" id="vegano" value="sim">
        <label for="vegano">Sim</label>
        <input type="radio" name="vegano" id="vegano" value="nao">
        <label for="vegano">Não</label><br><br>


        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
    <h2>Listagem de Pratos</h2>
    <?php
     $arquivo = fopen("pratos-db.txt", 'r');
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha <br>";
    }
    fclose($arquivo);
    ?>
</body>
</html>