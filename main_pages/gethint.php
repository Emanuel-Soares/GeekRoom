<?php
require_once('../conexao.php');
$s = new Contas;
$s->conectarMysqli('127.0.0.1', 'root', '', 'geekroom');
$m = $_REQUEST["m"];
$con = $s->pesquisar($m, 'mangas');
while($dado = $con->fetch_array())
{
    $a[] = $dado['titulo'];
}
$hint = "";
if ($m !== "" && isset($a)) {
  $m = strtolower($m);
  $len=strlen($m);
  foreach($a as $name) {
    if (stristr($m, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}
echo $hint === "" ? "Nenhum mangá com esse nome" : $hint;
?>