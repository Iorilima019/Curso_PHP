<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="funcionarios-cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="fone">Telefone:</label>
        <input type="text" id="fone" name="fone" required><br><br>

        <label for="numeDepen">Número de Dependentes:</label>
        <input type="number" id="numeDepen" name="numeDepen" min="0" required><br><br>

        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="">Selecione o estado</option>
            <option value="AC">AC - Acre</option>
            <option value="AP">AP - Amapá</option>
            <option value="AM">AM - Amazonas</option>
            <option value="PA">PA - Pará</option>
            <option value="RO">RO - Rondônia</option>
            <option value="RR">RR - Roraima</option>
            <option value="TO">TO - Tocantins</option>
            <option value="AL">AL - Alagoas</option>
            <option value="BA">BA - Bahia</option>
            <option value="CE">CE - Ceará</option>
            <option value="MA">MA - Maranhão</option>
            <option value="PB">PB - Paraíba</option>
            <option value="PE">PE - Pernambuco</option>
            <option value="PI">PI - Piauí</option>
            <option value="RN">RN - Rio Grande do Norte</option>
            <option value="SE">SE - Sergipe</option>
            <option value="DF">DF - Distrito Federal</option>
            <option value="GO">GO - Goiás</option>
            <option value="MT">MT - Mato Grosso</option>
            <option value="MS">MS - Mato Grosso do Sul</option>
            <option value="ES">ES - Espírito Santo</option>
            <option value="MG">MG - Minas Gerais</option>
            <option value="RJ">RJ - Rio de Janeiro</option>
            <option value="SP">SP - São Paulo</option>
            <option value="PR">PR - Paraná</option>
            <option value="RS">RS - Rio Grande do Sul</option>
            <option value="SC">SC - Santa Catarina</option>
        </select><br><br>

        <label for="casado">Casado?</label>
        <input type="radio" id="casado" name="casado" value="sim"> Sim
        <input type="radio" id="casado" name="casado" value="nao"> Não
        <br><br>

        <label for="necessitaAdap">Necessita de adaptação para o trabalho?</label>
        <input type="radio" id="necessitaAdap" name="necessitaAdap" value="sim"> Sim
        <input type="radio" id="necessitaAdap" name="necessitaAdap" value="nao"> Não
        <br><br>

        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao"></textarea>
        <br><br>

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
    <h2>Listagem de Funcionários</h2>
    <?php
     $arquivo = fopen("funcionarios-db.txt", 'r');
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha <br>";
    }
    fclose($arquivo);
    ?>
</body>
</html>