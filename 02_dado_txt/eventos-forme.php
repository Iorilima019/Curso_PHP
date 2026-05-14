<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Evento</title>
</head>
<body>
    <h1>Cadastro de Evento</h1>
    <form action="eventos-cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

       <label for="tipo">Tipo</label>
       <select id="tipo" name="tipo" required>
           <option value="">Selecione o tipo</option>
           <option value="Show">Show</option>
           <option value="Formatura">Formatura</option>
       </select> <br><br>
       
       <label for="data">Data</label>
       <input type="date" id="data" name="data" required><br><br>

       <label for="descricao">Descrição</label>
       <textarea id="descricao" name="descricao" required></textarea><br><br>

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>