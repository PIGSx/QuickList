<?php
@session_start();
require('connect.php');
extract($_FILES);
extract($_POST);
$senha = md5($senha);

$busca1 = mysqli_query($con, "Select * from `tb_lista` where `email` = '$email'");
    if($busca1->num_rows == 1){
        $contato = mysqli_fetch_array($busca1);
        if($senha === $contato['senha']){
            $_SESSION['login'] = true;
            $_SESSION['cod'] = $contato['cod'];
            $_SESSION['email'] = $contato['email'];
            $_SESSION['tipo'] = 1;
            $target = "location:oi.php";
        }else{
            $target = "location:login.php";
            $msg = "Email ou senha invalidos";
        }
    }else{
        $target = "location:login.php";
        $msg = "Email ou senha invalidos";
    }
    $_SESSION['msg'] = $msg;
    header($target);
