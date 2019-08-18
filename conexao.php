<?php
Class Contas {
    
    private $pdo;
    private $mysqli;
    public $msgErro = "";

    public function conectarPdo($db, $host, $user, $pass) {
        global $pdo;
        try {
        $pdo = new PDO('mysql:dbname='.$db.';host='.$host, $user, $pass);
        } catch(PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }

    public function conectarMysqli($host, $user, $senha, $db) {
        global $mysqli;
        $mysqli = new mysqli($host, $user, $senha, $db);
        if (!$mysqli) {
            echo strtoupper("Error: Unable to connect to MySQL.") . PHP_EOL;
            echo strtoupper("Debugging error: ") . mysqli_connect_errno() . PHP_EOL;
            echo strtoupper("Debugging error: ") . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

    public function pesquisar($p ,$tabela)
    {   
        global $mysqli;
        $consulta = "SELECT titulo FROM $tabela WHERE titulo LIKE '%$p%'";
        $con = $mysqli->query($consulta);
        return $con;
    }

     public function pegarValores($tabela) {
         global $mysqli;
         $consulta = "SELECT * FROM $tabela";
         $con = $mysqli->query($consulta);
         return $con;
         $consulta = null;
         $con = null;
     }

    public function filtrarValores($tabela, $titulo) {
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM $tabela WHERE titulo = :t");
        $sql->bindValue(":t", $titulo);
        $sql->execute();
        return $sql;
        $consulta = null;
        $con = null;
    }

    public function cadastrar($user, $nome, $senha, $email) {
        global $pdo;
        if($user == null || $user == " " || $user == "  " || $user == "   " || $user == "    ") {
            return false;
        }
        $sql = $pdo->prepare("SELECT id FROM cadastro WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $pdo->prepare("INSERT INTO cadastro VALUES (DEFAULT, :u, :n, :s, :e, DEFAULT, NOW())");
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

    // Administração

    public function add($titulo, $caps, $table, $capitulos) {
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM $table WHERE titulo = :t");
        $sql->bindValue(":t", $titulo);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false;
        }
        else
        {
            $nsql = $pdo->prepare("INSERT INTO $table (id, titulo, $capitulos) VALUES (DEFAULT, :t, :c)");
            $nsql->bindValue(":t", $titulo);
            $nsql->bindValue(":c", $caps);
            $nsql->execute();
            return true;
        }
    }

    public function alter($titulo, $caps, $table, $capitulos) {
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM $table WHERE titulo = :t");
        $sql->bindValue(":t", $titulo);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            $dado = $sql->fetch();
            $nsql = $pdo->prepare("UPDATE $table SET $capitulos = :c WHERE titulo = :t");
            $nsql->bindValue(":t", $titulo);
            $nsql->bindValue(":c", $caps);
            $nsql->execute();
            return true;
        }
        else
        {
            return false;
        }
    }

    public function condAddC($titulo, $caps, $table, $capitulos, $tab, $addTab, $w) {
        if(!empty($titulo) && !empty($caps))
        {
            $this->conectarPdo('geekroom', '127.0.0.1', 'root', '');
            if($this->msgErro == "")
            {
                if($this->add($titulo, $caps, $table, $capitulos)){
                    ?>
                    <script>
                        $("<?php echo '.'.$tab; ?>").addClass('tab-hide');
                        $("<?php echo '.'.$addTab; ?>").removeClass('tab-hide');            
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        $('div.alert-w<?php echo $w ?>').css('display', 'block')
                    </script>
                    <?php
                }
            }
            else
            {
                echo "ERRO:". $this->msgErro;
            }
        }
        else
        {
            echo 'Preencha todos os campos';
        }
    }

    public function condAltC($titulo, $caps, $table, $capitulos, $tab, $alterTab) {
        if(!empty($titulo) && !empty($caps))
        {
            $this->conectarPdo('geekroom', '127.0.0.1', 'root', '');
            if($this->msgErro == "")
            {
                if($this->alter($titulo, $caps, $table, $capitulos)){
                    ?>
                    <script>
                        $("<?php echo '.'.$tab; ?>").addClass('tab-hide');
                        $("<?php echo '.'.$alterTab; ?>").removeClass('tab-hide');            
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        $('div.alert-w7').css('display', 'block');
                    </script>
                    <?php
                }
            }
            else
            {
                echo "ERRO:". $this->msgErro;
            }
        }
        else
        {
            echo 'Preencha todos os campos';
        }
    }

    public function gerarArquivo($tit,$tcap,$diretorio,$gerador,$p)
    {
        $titulo = str_replace(" ", "-", $tit);
        $caminho = "../$diretorio/$titulo/";
        if(is_dir($caminho)){}
        else { mkdir($caminho); }
        $c = array();
        for($i = 1; $i <= $tcap; $i++)
        {
            $_SESSION['titulo'] = $tit; 
            $conteudo = file_get_contents($gerador.'.php');
            if (is_file("../$diretorio/$titulo/$p-$i.php")):
                continue;
            else:
                file_put_contents('../'.$diretorio.'/'.$titulo.'/'.$p.'-'.$i.'.php', $conteudo);
            endif;
        }
    }

}
?>