<?php
include('menu.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/quicklist.css">
</head>

<body>
    <?php
    require('connect.php');
    session_start();

    if ($_SESSION['login'] == true && $_SESSION['tipo'] == 1) {
        $perfis = mysqli_query($con, "SELECT * FROM `tb_users` WHERE `tb_users`.`cod` = '{$_SESSION['cod']}'");
    }
    $perfil = mysqli_fetch_array($perfis);
    echo "<h1>our list | $perfil[nome]</h1>";
    ?>
    <main>
    <div class="content">
        <div class="content-item">
            <input type="text" id="input-task" placeholder="enter your task">
            <button onclick="newTask()" id="btn-task" title="clique aqui para adicionar uma nova task" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
            </button>
        </div>
        <div class="content-list">
            <ul id="to-do-list">
                <li><button></button></li>
            </ul>
        </div>
    </div>
    </main>
    <script src="js/script.js"></script>
</body>

</html>