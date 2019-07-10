<?php
Class Contas {
    private $pdo;
    public $msgErro = "";
    public function conectar($host, $db, $usuario, $senha) {       
        try {
            global $pdo;
            $pdo = new PDO("mysql:dbname=$nome;host=$host", $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }

    public function cadastrar($user, $email, $nome, $senha) {
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM cadastro WHERE email = :e AND username = :u");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":u", $user);
        $sql->execute();
        if($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $pdo->prepare("INSERT INTO cadastro VALUES(DEFAULT, :u, :n, :s, :e)");
            $sql->bindValue(":u", $user);
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":s", MD5($senha));
            $sql->bindValue(":e", $email);
            $sql->execute();
            return true;
        }
    }

    public function login($user, $senha) {
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM cadastro WHERE email = :e AND senha = :s");
        $sql->bindValue(":s", MD5($senha));
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true;
        } else {
            return false;

        } 
    }

}




?>