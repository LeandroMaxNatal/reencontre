<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "projeto_web_1_db";

    // crate a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check the connection
    if (mysqli_connect_error()) {
        die("Database connection failed: ". mysqli_connect_error());
    }

    $nome       = $_POST['nome'];
    $apelido    = $_POST['apelido'];
    $sexo       = $_POST['sexo'];
    $estado     = $_POST['estado'];
    $cidade     = $_POST['cidade'];
    $info       = $_POST['info'];

    $sql = "INSERT INTO procurados (nome, apelido, sexo, estado, cidade, info)
    VALUES ('$nome', '$apelido', '$sexo', '$estado', '$cidade', '$info')";

    if (mysqli_query($conn, $sql)) {
        // echo "usuario inserido com sucesso";
        header('location:../initial.php');

    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);    
?>