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

    $userUsername   = $_POST['username'];
    $userEmail      = $_POST['email'];
    $userPassword   = $_POST['password'];
    // create database 
    $sql = "INSERT INTO users (username, email, password)
        VALUES ('$userUsername','$userEmail','$userPassword')";


    if (mysqli_query($conn, $sql)) {
        // echo "usuario inserido com sucesso";
        header('location:../login.html');

    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>