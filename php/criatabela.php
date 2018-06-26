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

    // create database 
    $sql = "CREATE TABLE users(
        id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        email varchar(50),
        password varchar(5),
        reg_date TIMESTAMP 
    )";

    // Drop Table
    // $sql = "DROP TABLE users";


    if (mysqli_query($conn, $sql)) {
        echo "table users created sucessyfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>