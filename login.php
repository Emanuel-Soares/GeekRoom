<?php 
require('conexao.php');

$email = isset($_POST['email'])? addslashes($_POST['email']) : '';
$name = isset($_POST['name'])? addslashes($_POST['name']) : "Conta";
$senha = isset($_POST['senha'])? addslashes($_POST['senha']) : "";
$username = isset($_POST['usr'])? addslashes($_POST['usr']) : "Conta";
if($username == ""){
    $username = "Conta";
}else{}
session_start();
$_SESSION['usr']=$username;
$sql = "INSERT INTO cadastro
VALUES (DEFAULT ,'$username', '$name', '$senha', \"$email\")";
$link->query($sql);

$user = (isset($_POST['user']))? $_POST['user'] : null;
$sen = (isset($_POST['sen']))? $_POST['sen'] : null;



$link = null;

?>

<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4">Login</h1>
        </div>
    </div>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="user">Digite o seu username: </label>
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
