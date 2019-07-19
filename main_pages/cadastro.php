<?php include 'header.php'; ?>
<div class="alert alert-success alert-s" style="width:100%;margin-bottom:100px;display:none;" role="alert">Cadastrado com sucesso!</div>
<div class="alert alert-warning alert-w" style="width:100%;margin-bottom:100px;display:none;" role="alert">Conta já cadastrada</div>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4">Cadastro</h1>
        </div>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="usr">Digite abaixo o seu username: </label>
            <input type="text" required class="form-control" id="usr" name="usr" placeholder="Digite o seu nome de usuário">
        </div>
        <div class="form-group">
            <label for="email">Digite abaixo o seu e-mail: </label>
            <input type="email" required class="form-control" id="email" name="email" placeholder="Digite o seu e-mail" onkeyup="this.value = this.value.toLowerCase()">
        </div>
        <div class="form-group">
            <label for="nome">Digite abaixo o seu nome:</label>
            <input type="text" required class="form-control" id="name" name="nome" placeholder="Digite o seu nome" onkeyup="this.value = this.value.toUpperCase()">
        </div>
        <div class="form-group">
            <label for="senha">Digite abaixo a sua senha: </label>
            <input type="password" required class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
        </div>
        <div class="form-group">
            <label for="csenha">Confirme a sua senha: </label>
            <input type="password" required class="form-control" id="csenha" name="csenha" placeholder="Confirme sua senha">
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col text-center">
                    <input type="submit" value="Enviar" class="btn btn-info">
                </div>
            </div>
        </div>
    </form>
</div>

<?php
$c = new Contas;

if(isset($_POST['usr']) && isset($_POST['email']) && isset($_POST['nome']) && isset($_POST['senha']))
{
    $user = $_POST['usr'];
    $email = addslashes($_POST['email']);
    $nome = addslashes($_POST['nome']);
    $senha = addslashes($_POST['senha']);
    $csenha = addslashes($_POST['csenha']);
    if(!empty($nome) && !empty($email) && !empty($nome) && !empty($senha) && !empty($csenha))
    {
        $c->conectarPdo('geekroom', '127.0.0.1' ,'root', '');
        if($c->msgErro == "")
        {
            if($senha == $csenha)
            {
                if($user == "Conta") {
                    $user = null;
                }
                if($c->cadastrar($user, $nome, $senha, $email))
                {
                    ?>
                    <script>
                        $("div.alert-s").css('display', 'block')
                    </script>
                    <?php   
                }
                else
                {
                    ?>
                    <script>
                        $('div.alert-w').css('display', 'block')
                    </script>
                    <?php
                }
            }
            else
            {
                echo "Senha e confirmar Senha não correspondem!";
            }
        }
        else
        {
            echo "ERRO:". $c->msgErro;
        }
    }
    else
    {
        echo "Preencha todos os campos!";
    }
}
?>