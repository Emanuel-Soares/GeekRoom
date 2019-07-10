<?php

$email = (isset($_POST['email']))? $email = $_POST['email'] : $email = "";
$name = (isset($_POST['name']))? $name = $_POST['name'] : $name = "Conta";
$senha = (isset($_POST['senha']))? $senha = $_POST['senha'] : $senha = "";
$username = (isset($_POST['usr']))? $username = $_POST['usr'] : $username = "Conta";

echo "username: $username <br> name: $name <br> senha: $senha <br> email: $email";

?>