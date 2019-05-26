<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekRoom</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a href="index.php" class="navbar-brand">GeekRoom</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Mangás</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Animes</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Filmes</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">HQs</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">LiveBook</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conta</a>
                    <div class="dropdown-menu">
                        <a href="cadastro.php" class="dropdown-item">Criar conta</a>
                        <a href="login.php" class="dropdown-item">Fazer Login</a>
                    </div>
                </li>
            </ul>

            <form class="form-inline ml-md-auto">
                <div class="input-group">
                    <input type="text" class="form-control input-group-prepend" placeholder="O que deseja buscar?">
                    <input type="submit" class="btn btn-success input-group-append" value="Buscar">
                </div>
            </form>

        </div>
    </nav>
