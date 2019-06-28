<?php 
$link = new mysqli("127.0.0.1", "root", "", "cadastro");

$email = ($_POST["email"] != "")? $_POST["email"] : "";
$name = ($_POST["name"] != "")? $_POST["name"] : "Convidado";
$senha = ($_POST["senha"] != "")? $_POST["senha"] : "";
$username = ($_POST["usr"] != "")? $_POST["usr"] : "Convidado";


if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "INSERT INTO `usuarios` (`username`, `name`, `email`, `senha`)
VALUES ($usr, $name, $email, $senha);
$link->query($sql);

$link->close();

?>

<?php
include 'header.php';
include 'main.php';

?>
