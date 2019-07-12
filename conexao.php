<?php
class Contas {
    
    private $pdo;
    public $msgErro = "";

    public function conectar($db, $host, $user, $pass) {
        global $pdo;
        try {
        $pdo = new PDO('mysql:dbname='.$db.';host='.$host, $user, $pass);
        } catch(PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }

    public function cadastrar($user, $nome, $senha, $email) {
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM cadastro WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $pdo->prepare("INSERT INTO cadastro VALUES (DEFAULT, :u, :n, :s, :e)");
            $sql->bindValue(":u",$user);
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":s",MD5($senha));
            $sql->bindValue(":e",$email);
            $sql->execute();
            return true;
        }
    }

    public function logar($emailSenha, $senha) {
        global $pdo;
        $sql = $pdo->prepare("SELECT id, username FROM cadastro WHERE (email = :eu OR username = :eu) AND senha = :s");
        $sql->bindValue(":eu",$emailSenha);        
        $sql->bindValue(":s",MD5($senha));
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['user'] = $dado['username'];
            return true;
        } else {
            return false;
        }
    }
}
?>