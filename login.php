<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4">Login</h1>
        </div>
    </div>
    <form>
        <div class="form-group">
            <label for="nome">Digite o seu username: </label>
            <input type="text" class="form-control" id="usr" name="usr">
        </div>
        <div class="form-group">
            <label for="senha">Digite sua senha: </label>
            <input type="text" class="form-control" id="senha" name="senha">
        </div>
        <div class="row">
            <div class="col text-center">
                <input type="submit" class="btn btn-info">
            </div>
        </div>
    </form>
</div>