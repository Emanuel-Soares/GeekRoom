<?php include 'header.php';?>
<div class="alert alert-warning alert-w2" style="width:100%;margin-bottom:100px;display:none;" role="alert">Preencha todos os campos!</div>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4">Login</h1>
        </div>
    </div>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="user">Digite o seu username ou e-mail: </label>
            <input type="text" class="form-control" id="user" name="email">
        </div>
        <div class="form-group">
            <label for="senha">Digite sua senha: </label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="row">
            <div class="col text-center">
                <input type="submit" value="Enviar" class="btn btn-info">
            </div>
        </div>
    </form>
</div>

<?php 
require_once('conexao.php');
$c = new Contas;
if(isset($_POST['email']) && isset($_POST['senha']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    if(!empty($email) && !empty($senha))
    {
        $c->conectarPdo('geekroom', '127.0.0.1' ,'root', '');
        if($c->msgErro == "")
        {
            if($c->logar($email, $senha))
            {
                header('location: index.php');
            }   
            else
            {
                echo 'Nome Email e/ou Senha estão Incorretos!';
            }
        }
        else
        {
            echo "ERRO:". $c->msgErro;
        }
    }
    else
    {
        ?>
        <script>
            $("div.alert-w2").css('display', 'block')
        </script>
        <?php
    }
}
?>