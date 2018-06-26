<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Passion+One:900|Raleway:400|Sacramento" rel="stylesheet">
</head>
<body>
    <div class="cover-wrapper">
        <nav class="menu navbar navbar-expand-lg navbar-dark bg-inverse">
                <a class="navbar-brand logo" href="#">R<span class="logo-color-cover">ee</span>ncontros</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="cadastra_pessoa.html">cadastrar uma pessoa    |</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">editar meu perfil |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Sair |</a>
                        </li>
                    </ul>
                </div>
            </nav>
        
        <div class="background-image">
            <div class="container">
                <div class="row form-control">
                    <div class="">
                        <label for="pesquisa">Procure pelo nome: </label>
                        <input class="search-input" type="text" name="pesquisa" placeholder="digite aqui o nome da pessoa que você está procurando">
                        <i class="fas fa-search"></i>
</input>
                    </div>
                </div>
                <div class="row pessoas-cadastradas">
                    <h2>Pessoas cadastradas</h2>
                </div>
                <div class="row pessoas-cadastradas-lista">
                    <iframe src="./lista_cadastrados.php"></iframe>
                </div>
            </div>
        </div>
    </div>
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>