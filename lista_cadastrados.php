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

    $sql = "SELECT nome, apelido, cidade FROM procurados";
    $result = mysqli_query($conn, $sql);

    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($result);

    // calcula quantos dados retornaram
    $total = mysqli_num_rows($result);

    // if () {
    //     // echo "usuario inserido com sucesso";
    //     header('location:../initial.php');

    // } else {
    //     echo "Error creating table: " . mysqli_error($conn);
    // }

    mysqli_close($conn);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
        <div class="container">
                <div class="pessoas-cadastradas-lista">
                    <table>
                        <tr>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Cidade</th>
                            <th>mais informações</th>  
                        </tr>
                        <?php
                            // se o número de resultados for maior que zero, mostra os dados
                            if($total > 0) {
                                // inicia o loop que vai mostrar todos os dados
                                do {
                        ?>
                        <tr>
                            <td><?=$linha['nome']?></td>
                            <td><?=$linha['apelido']?></td>
                            <td><?=$linha['cidade']?></td>
                            <td>Lupa</td>
                        </tr>
                        <?php
                                // finaliza o loop que vai mostrar os dados
                                }while($linha = mysqli_fetch_assoc($result));
                            // fim do if 
                            }
?>
                    </table>
                </div>
            </div>    
</body>
</html>
