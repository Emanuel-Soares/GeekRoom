<?php 
if(isset($_POST['pesquisa']))
{
    $p = $_POST['pesquisa'];
}
$consulta = "SELECT titulo FROM $tabela WHERE titulo LIKE '%$p%'";
$con = $mysqli->query($consulta);
?>