<?php
extract($_POST);
$senha = md5($senha);
extract($_FILES);
require('connect.php');
$status = "pendente";

if (mysqli_query($con, "INSERT INTO `tb_lista` (`cod`, `nome`, `email`, `senha`, `tarefa`, `status`)
 VALUES (NULL, '$nome', '$email', '$senha', '$tarefa', '$status');")) {
    $msg = "<p class=sucesso>Registro criado com sucesso!</p>";
} else {
    $msg = "<p class=erro>Errou, tente novamente!</p>";
}
session_start();
$_SESSION['msg'] = $msg;

header("location:index.php");
