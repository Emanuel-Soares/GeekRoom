<?php 
    session_start();
    if(!isset($_SESSION['id']))
    {
        $username = 'Conta';
    }
    else
    {
        $username = $_SESSION['user'];
        $ranking = $_SESSION['ranking'];
    }
    require_once('../conexao.php');
    $s = new Contas;
    if(isset($_POST['sair'])) {
        $s->conectarPdo('geekroom', '127.0.0.1', 'root', '');
        {
            $s->sair($username, $ranking);
            session_destroy();
            $username = "Conta";
        }
    }
?>

<style>
.bg-darkgray-2 {
    background-color: #191919;
}
</style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekRoom</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/estilo.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-darkgray-2 sticky-top">
        <a href="../main_pages/index.php" class="navbar-brand">GeekRoom</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <li class="nav-item dropdown">
                    <?php $s->conectarPdo('geekroom', '127.0.0.1', 'root', '');
                         if($username != 'Conta') { ?>                    
                        <a href="novel.php" class="nav-link dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Novels</a>
                            <div class="dropdown-menu">
                            <a href="../main_pages/novels.php" class="dropdown-item">Início</a>
                            <a href="" class="dropdown-item">Lançamentos</a>
                            <a href="" class="dropdown-item">Lista</a>
                            <a href="" class="dropdown-item">Gêneros</a>
                            <a href="" class="dropdown-item">Favoritos</a>
                            <?php if(!isset($_SESSION['id'])) { ?><a href="#" class="dropdown-item">Assinaturas</a><?php } ?>
                        </div>
                    <?php } else { ?>
                    <a href="../main_pages/novel.php" class="nav-link">Novels</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <a href="../main_pages/mangas.php" class="nav-link">Mangás</a>
                </li>
                <li class="nav-item">
                    <a href="../main_pages/animes.php" class="nav-link">Animes</a>
                </li>
                <li class="nav-item">
                    <a href="../main_pages/filmes.php" class="nav-link">Filmes</a>
                </li>
                <li class="nav-item">
                    <a href="../main_pages/hqs.php" class="nav-link">HQs</a>
                </li>
                <li class="nav-item">
                    <a href="../main_pages/livebook.php" class="nav-link">LiveBook</a>
                </li>
                <?php if((!isset($_SESSION['id']) || isset($_POST['sair']))) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="cursor:pointer;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username; ?></a>
                        <div class="dropdown-menu">
                            <a href="../main_pages/cadastro.php" class="dropdown-item">Criar conta</a>
                            <a href="../main_pages/login.php" class="dropdown-item">Fazer Login</a>
                        </div>
                    </li>
                <?php } else if($ranking == 'com') { ?>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="cursor:pointer;"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username; ?></a>
                    <div class="dropdown-menu">
                        <a href="assinaturas.php" class="dropdown-item">Assinaturas</a>
                        <a href="perfil.php" class="dropdown-item">Perfil</a>
                        <a href="historico.php" class="dropdown-item">Histórico</a>
                        <a href="chats.php" class="dropdown-item">Chats</a>
                        <form method="post">
                            <input type="submit" value="sair" name="sair" class="dropdown-item">
                        </form>
                    </div>
                </li>
                <?php } else if($ranking == 'mod') { ?>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="cursor:pointer;"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username; ?></a>
                    <div class="dropdown-menu">
                        <a href="assinaturas.php" class="dropdown-item">Assinaturas</a>
                        <a href="perfil.php" class="dropdown-item">Perfil</a>
                        <a href="historico.php" class="dropdown-item">Histórico</a>
                        <a href="chats.php" class="dropdown-item">Chats</a>
                        <form method="post">
                            <input type="submit" value="sair" name="sair" class="dropdown-item">
                        </form>
                    </div>
                </li>
                <?php } else if($ranking == 'admin') { ?>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="cursor:pointer;"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username; ?></a>
                        <div class="dropdown-menu">
                            <a href="assinaturas.php" class="dropdown-item">Assinaturas</a>
                            <a href="perfil.php" class="dropdown-item">Perfil</a>
                            <a href="historico.php" class="dropdown-item">Histórico</a>
                            <a href="chats.php" class="dropdown-item">Chats</a>
                            <a href="adm.php" class="dropdown-item">Adiministração</a>
                            <form method="post">
                                <input type="submit" value="sair" name="sair" class="dropdown-item">
                            </form>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="ml-md-auto" style="margin: auto 0 auto 0;">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal">Buscar</button>
            </div>
        </div>
    </nav>