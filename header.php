<?php 
    session_start();
    if(!isset($_SESSION['id']))
    {
        $username = 'Conta';
    }
    else
    {
        $username = $_SESSION['user'];
    }

    if(isset($_POST['sair'])) {
        $username = "Conta";
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekRoom</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/estilo.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a href="index.php" class="navbar-brand">GeekRoom</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="novel.php" class="nav-link">Novels</a>
                </li>
                <li class="nav-item">
                    <a href="mangas.php" class="nav-link">Mangás</a>
                </li>
                <li class="nav-item">
                    <a href="animes.php" class="nav-link">Animes</a>
                </li>
                <li class="nav-item">
                    <a href="filmes.php" class="nav-link">Filmes</a>
                </li>
                <li class="nav-item">
                    <a href="hqs.php" class="nav-link">HQs</a>
                </li>
                <li class="nav-item">
                    <a href="livebook.php" class="nav-link">LiveBook</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="cursor:pointer;"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username; ?></a>
                    <div class="dropdown-menu">
                        <a href="cadastro.php" class="dropdown-item">Criar conta</a>
                        <a href="login.php" class="dropdown-item">Fazer Login</a>
                        <form method="post">
                            <input type="submit" name="sair" value="sair" class="dropdown-item">
                        </form>
                    </div>
                </li>
            </ul>

            <form class="form-inline ml-md-auto" style="margin: auto 0 auto 0;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <input type="text" class="form-control" placeholder="O que deseja buscar?">
                    </div>
                    <div class="input-group-append">
                            <input type="submit" class="btn btn-success input-group-append" value="Buscar">
                    </div>
                </div>
            </form>

        </div>
    </nav>