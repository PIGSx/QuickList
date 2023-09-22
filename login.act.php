<?php
@session_start();
require('connect.php');
extract($_FILES);
extract($_POST);
$senha = md5($senha);

// Verifique se o email e a senha correspondem a um usuário no banco de dados
$busca1 = mysqli_query($con, "SELECT * FROM `tb_users` WHERE `email` = '$email'");
if ($busca1->num_rows == 1 ) {
    $contato = mysqli_fetch_array($busca1);
    if ($senha === $contato['senha']) {
        $_SESSION['login'] = true;
        $_SESSION['cod'] = $contato['cod']; // ID do usuário autenticado
        $_SESSION['email'] = $contato['email'];
        $_SESSION['tipo'] = 1;
        $target = "location:quicklist.php";
        $msg = '';
    } else {
        $target = "location:login.php";
        $msg = "Email ou senha inválidos";
    }
} else {
    $target = "location:login.php";
    $msg = "Email ou senha inválidos";
}
$_SESSION['msg'] = $msg;
header($target);
