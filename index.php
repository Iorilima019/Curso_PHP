<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    // aqui criar o array de mulheres
    $arrayMulheres = [
        ['Ada Lovelace', 'ada-lovelace.webp', 'Matemática britânica reconhecida como a primeira programadora da história. Ao escrever algoritmos para a Máquina Analítica de Babbage, ela percebeu que computadores poderiam processar mais do que números, prevendo a computação moderna ainda no século XIX.'],
        ['Dorothy Vaughan', 'dorothy-vaughan.png', 'Almirante e cientista da computação norte-americana, foi pioneira na criação de compiladores. Ela desenvolveu a base para a linguagem COBOL e popularizou o termo "debugging" após remover uma mariposa física de dentro de um computador Mark II.'],
        ['Grace hamilton', 'grace-hopper.webp', 'Matemática e líder das "computadoras humanas" na NASA, Vaughan foi a primeira supervisora negra da agência. Ela previu a ascensão dos computadores digitais e especializou-se em Fortran, garantindo que sua equipe fizesse a transição para a era da computação eletrônica.'],
        ['Margareth Hamilton', 'margareth-hamiton.webp', 'Cientista da computação que liderou a equipe do MIT responsável pelo software de voo do Projeto Apollo. Seu código foi crucial para o pouso na Lua em 1969; ela é creditada por cunhar o termo "engenharia de software" e priorizar a detecção de erros em sistemas críticos.'],
        ['Marissa Mayer', 'marissa-mayar1.png', 'Engenheira de software de destaque, foi a primeira engenheira mulher do Google, onde liderou o desenvolvimento de produtos icônicos como a Busca e o Gmail. Mais tarde, atuou como CEO do Yahoo!, tornando-se uma das executivas mais influentes do Vale do Silício.']
    ];
    ?>

    <div class="galeria">
        
        <?php /*cada item é o conjunto de informações de uma mulher*/  ?>
        <div class="item">
            <img src="<?php echo $arrayMulheres [0][1]; ?>">
            <h3><?php echo $arrayMulheres [0][0]; ?></h3>
            <p><?php echo $arrayMulheres [0] [2]; ?></p>
        </div>
        
        <div class="item">
            <img src="<?php echo $arrayMulheres [1][1]; ?>">
            <h3><?php echo $arrayMulheres [1][0]; ?></h3>
            <p><?php echo $arrayMulheres [1] [2]; ?></p>
        </div>

        <div class="item">
            <img src="<?php echo $arrayMulheres [2][1]; ?>">
            <h3><?php echo $arrayMulheres [2][0]; ?></h3>
            <p><?php echo $arrayMulheres [2] [2]; ?></p>
        </div>
        
        <div class="item">
            <img src="<?php echo $arrayMulheres [3][1]; ?>">
            <h3><?php echo $arrayMulheres [3][0]; ?></h3>
            <p><?php echo $arrayMulheres [3] [2]; ?></p>
        </div>
    </div>

    
</body>
</html>
 