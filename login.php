<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4">Login</h1>
        </div>
    </div>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="user">Digite o seu username ou e-mail: </label>
            <input type="text" class="form-control" id="user" name="user">
        </div>
        <div class="form-group">
            <label for="senha">Digite sua senha: </label>
            <input type="text" class="form-control" id="senha" name="sen">
        </div>
        <div class="row">
            <div class="col text-center">
                <input type="submit" value="Enviar" class="btn btn-info">
            </div>
        </div>
    </form>
</div>
