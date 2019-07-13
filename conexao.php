<?php
Class Contas {
    
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
            $sql = $pdo->prepare("INSERT INTO cadastro VALUES (DEFAULT, :u, :n, :s, :e, DEFAULT, DEFAULT)");
            $sql->bindValue(":u",$user);
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":s",MD5($senha));
            $sql->bindValue(":e",$email);
            $sql->execute();
            return true;
        }
    }

    public function logar($emailUser, $senha) {
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM cadastro WHERE (email = :eu OR username = :eu) AND senha = :s");
        $sql->bindValue(":eu",$emailUser);        
        $sql->bindValue(":s",MD5($senha));
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['user'] = $dado['username'];
            $_SESSION['ranking'] = $dado['ranking'];
            return true;
        } else {
            return false;
        }
    }

    public function sair($user, $ranking) {
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM login WHERE username = :u AND ranking = :r");
        $sql->bindValue(":u", $user);
        $sql->bindValue(":r", $ranking);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            $dado = $sql->fetch();
            $nsql = $pdo->prepare("UPDATE login SET acessos = acessos + 1 WHERE username = :u AND ranking = :r");
            $nsql->bindValue(":u", $user);
            $nsql->bindValue(":r", $ranking);
            $nsql->execute();
            return true;
        }
        else
        {
            $nsql = $pdo->prepare("INSERT INTO login VALUES (acessos + 1, :u, :r)");
            $nsql->bindValue(":u", $user);
            $nsql->bindValue(":r", $ranking);
            $nsql->execute();
            return false;
        }
    }

}
?>