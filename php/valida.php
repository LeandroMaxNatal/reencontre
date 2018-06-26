<?php 
    // Session Start inicia a sessão
    session_start();

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "projeto_web_1_db";

    // create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check the connection
    if (mysqli_connect_error()) {
        die("Database connection failed: ". mysqli_connect_error());
    }

    $result = mysql_query("SELECT * FROM `users` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");

    if (mysql_num_rows($result) > 0) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:inicial.php');
    } else {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('location:index.php');
    }
?>