<?php 
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

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`= '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:../initial.php');
    } else {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('location:../logup.php');
    }

    mysqli_close($conn);
?>