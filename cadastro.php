<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4">Cadastro</h1>
        </div>
    </div>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="usr">Digite abaixo o seu username: </label>
            <input type="text" class="form-control" id="usr" name="usr" placeholder="Digite o seu nome de usuário">
        </div>
        <div class="form-group">
            <label for="email">Digite abaixo o seu e-mail: </label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail">
        </div>
        <div class="form-group">
            <label for="nome">Digite abaixo o seu nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome">
        </div>
        <div class="form-group">
            <label for="senha">Digite abaixo a sua senha: </label>
            <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
        </div>
        <div class="form-group">
            <label for="csenha">Confirme a sua senha: </label>
            <input type="text" class="form-control" id="csenha" name="csenha" placeholder="Confirme sua senha">
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