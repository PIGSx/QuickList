<?php
extract($_POST);
$senha = md5($senha);
extract($_FILES);
require('connect.php');

if (mysqli_query($con, "INSERT INTO `tb_users` (`cod`, `nome`, `email`, `senha`)
 VALUES (NULL, '$nome', '$email', '$senha');")) {
    $msg = "<p class=sucesso>Registro criado com sucesso!</p>";
} else {
    $msg = "<p class=erro>Errou, tente novamente!</p>";
}
session_start();
$_SESSION['msg'] = $msg;

header("location:index.php");
