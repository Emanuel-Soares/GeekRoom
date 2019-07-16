<?php
require_once('../conexao.php');
$tab = 'tab-manga';
$addTab = 'tab-add-manga';
if(!isset($titulo_manga) && !isset($caps_manga))
{
    $titulo_manga = addslashes($_POST['titulo-manga']);
    $caps_manga = addslashes($_POST['caps-manga']);
}
else {
    $titulo_manga = 'a';
    $caps_manga = '2';
}
$w = 1;
$c = new Contas;
$c->condAddC($titulo_manga, $caps_manga, 'mangas', 'capitulos', $tab, $addTab, $w);
?>

<?php
    for($i = 1; $i <= $caps_manga; $i++)
    {
            if(!isset($caminho))
            {
                $caminho = "../mangas/".$titulo_manga."/";
                mkdir($caminho);
            }
            $conteudo = file_get_contents('ger_manga.php');
            file_put_contents('../mangas/'.$titulo_manga.'/capitulo-'.$i.'.php', $conteudo);
        }
    for($i = 1; $i <= $caps_manga; $i++)
    { ?>
        <tr>
            <td><?php echo $titulo_manga; ?></td>
            <td><?php echo 'Capítulo '. $i; ?></td>
            <td><a href="../mangas/<?php echo $titulo_manga; ?>/<?php echo 'capitulo-'.$i.'.php'; ?>" class="btn btn-link"><?php echo 'Capítulo '. $i; ?></a></td>
        </tr>
<?php    } 
    if(isset($_POST['btn-alter-manga'])) {
    require('adm_help.php');
    for($i = 1; $i <= $caps_manga; $i++) { ?>
        <tr>
            <td><?php echo $titulo_manga; ?></td>
            <td><?php echo 'Capítulo '. $i; ?></td>
            <td><a href="../mangas/<?php echo $titulo_manga; ?>/<?php echo 'capitulo-'.$i; ?>" class="btn btn-link"><?php echo 'Capítulo '. $i; ?></a></td>
        </tr>
<?php }} ?>