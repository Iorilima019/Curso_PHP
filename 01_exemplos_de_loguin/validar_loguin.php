<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email === "adm@senac.com.br" && $senha === "123456") {
    header("Location: tela-adiministrativa.php");
} else {
    header("Location: formulario_login.php?mensagem=erro");
}
?>