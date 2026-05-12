<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Gatos</h1>
    <form action="cadastrar.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br><br>

         <label for="raca">Raça: </label>
         <input type="" name="raca" id="raca"><br><br>

           <label for="idade">Idade: </label>
           <input type="number" name="idade" id="idade"><br><br>

          <label for="pelagem">Pelagem: </label>
          <input type="text" name="pelagem" id="pelagem"><br><br>

         <label for="gen">Gênero: </label>
         <input type="radio" name="gen" id="gen" value="macho"><label for="gen">Macho</label>
         <input type="radio" name="gen" id="gen" value="femea"><label for="gen">Fêmea</label><br><br>

        <label for="cast">Castrado: </label>
        <input type="radio" name="cast" id="cast" value="sim"><label for="cast">Sim</label>
        <input type="radio" name="cast" id="cast" value="nao"><label for="cast">Não</label><br><br>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>