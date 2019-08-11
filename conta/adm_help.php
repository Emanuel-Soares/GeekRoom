<?php 
if(isset($_POST['btn-add-manga']) || isset($_POST['btn-alter-manga']) || isset($_POST['add-manga']) || isset($_POST['alt-manga']))
{
    require_once('../conexao.php');    
    $tab = 'tab-mangas';
    $m = new Contas;
    $m->conectarMysqli('127.0.0.1', 'root', '', 'geekroom');
    $con = $m->pegarValores('mangas', 'titulo', 'capitulos');
    if(true)
    {
    ?>
    <script>
        $("<?php echo '.'.$tab; ?>").removeClass('tab-hide');            
    </script>
    <?php
    }
    else
    {
    ?>
    <script>
        $('div.alert-w7').css('display', 'block')
    </script>
    <?php
    }
}
?>

<?php 
if(isset($_POST['btn-add-novel']) || isset($_POST['btn-alter-novel']) || isset($_POST['add-novel']) || isset($_POST['alt-novel']))
{
    require_once('../conexao.php');
    $tab = 'tab-novels';
    $m = new Contas;
    $m->conectarMysqli('127.0.0.1', 'root', '', 'geekroom');
    $con = $m->pegarValores('novels');
    if(true)
    {
    ?>
    <script>
        $("<?php echo '.'.$tab; ?>").removeClass('tab-hide');            
    </script>
    <?php
    }
    else
    {
    ?>
    <script>
        $('div.alert-w7').css('display', 'block')
    </script>
    <?php
    }
}
?>

<?php 
if(isset($_POST['btn-add-anime']) || isset($_POST['btn-alter-anime']) || isset($_POST['add-anime']) || isset($_POST['alt-anime']))
{
    require_once('../conexao.php');
    $tab = 'tab-animes';
    $m = new Contas;
    $m->conectarMysqli('127.0.0.1', 'root', '', 'geekroom');
    $con = $m->pegarValores('animes', 'titulo', 'episodios');
    if(true)
    {
    ?>
    <script>
        $("<?php echo '.'.$tab; ?>").removeClass('tab-hide');            
    </script>
    <?php
    }
    else
    {
    ?>
    <script>
        $('div.alert-w7').css('display', 'block')
    </script>
    <?php
    }
}
?>

<?php 
if(isset($_POST['btn-add-filme']) || isset($_POST['btn-alter-filme']) || isset($_POST['add-filme']) || isset($_POST['alt-filme']))
{
    require_once('../conexao.php');
    $tab = 'tab-filmes';
    $m = new Contas;
    $m->conectarMysqli('127.0.0.1', 'root', '', 'geekroom');
    $con = $m->pegarValores('filmes', 'titulo', 'partes');
    if(true)
    {
    ?>
    <script>
        $("<?php echo '.'.$tab; ?>").removeClass('tab-hide');            
    </script>
    <?php
    }
    else
    {
    ?>
    <script>
        $('div.alert-w7').css('display', 'block')
    </script>
    <?php
    }
}
?>

<?php 
if(isset($_POST['btn-add-hq']) || isset($_POST['btn-alter-hq']) || isset($_POST['add-hq']) || isset($_POST['alt-hq']))
{
    require_once('../conexao.php');
    $tab = 'tab-hqs';
    $m = new Contas;
    $m->conectarMysqli('127.0.0.1', 'root', '', 'geekroom');
    $con = $m->pegarValores('hqs', 'titulo', 'capitulos');
    if(true)
    {
    ?>
    <script>
        $("<?php echo '.'.$tab; ?>").removeClass('tab-hide');            
    </script>
    <?php
    }
    else
    {
    ?>
    <script>
        $('div.alert-w7').css('display', 'block')
    </script>
    <?php
    }
}
?>

<?php 
if(isset($_POST['btn-add-novel']))
{
    require_once('../conexao.php');
    $tab = 'tab-novel';
    $addTab = 'tab-add-novel';
    $titulo_novel = addslashes($_POST['titulo-novel']);
    $caps_novel = addslashes($_POST['caps-novel']);
    $w = 1;
    $c = new Contas;
    $c->condAddC($titulo_novel, $caps_novel, 'novels', 'capitulos', $tab, $addTab, $w);
    $c->gerarArquivo($titulo_novel ,$caps_novel, 'novels', 'ger_novel', 'capitulo');
} else if(isset($_POST['btn-alter-novel']))
{
    require_once('../conexao.php');
    $tab = 'tab-novel';
    $alterTab = 'tab-alter-novel';
    $titulo_novel = addslashes($_POST['titulo-novel']);
    $caps_novel = addslashes($_POST['caps-novel']);
    $c = new Contas;
    $c->condAltC($titulo_novel, $caps_novel, 'novels', 'capitulos', $tab, $alterTab);
    $c->gerarArquivo($titulo_novel ,$caps_novel, 'novels', 'ger_novel', 'capitulo');
}
?>

<?php
if(isset($_POST['btn-add-manga']))
{
    require_once('../conexao.php');
    $tab = 'tab-manga';
    $addTab = 'tab-add-manga';
    $titulo_manga = addslashes($_POST['titulo-manga']);
    $caps_manga = addslashes($_POST['caps-manga']);
    $w = 1;
    $c = new Contas;
    $c->condAddC($titulo_manga, $caps_manga, 'mangas', 'capitulos', $tab, $addTab, $w);
    $c->gerarArquivo($titulo_manga ,$caps_manga, 'mangas', 'ger_manga', 'capitulo');
}
else if(isset($_POST['btn-alter-manga']))
{
    require_once('../conexao.php');
    $tab = 'tab-manga';
    $alterTab = 'tab-alter-manga';
    $titulo_manga = addslashes($_POST['titulo-manga']);
    $caps_manga = addslashes($_POST['caps-manga']);
    $c = new Contas;
    $c->condAltC($titulo_manga, $caps_manga, 'mangas', 'capitulos', $tab, $alterTab);
    $c->gerarArquivo($titulo_manga ,$caps_manga, 'mangas', 'ger_manga', 'capitulo');
} else if(isset($_POST['env_manga']))
{
    
}
?>

<?php
if(isset($_POST['btn-add-anime']))
{
    require_once('../conexao.php');
    $tab = 'tab-anime';
    $addTab = 'tab-add-anime';
    $titulo_anime = addslashes($_POST['titulo-anime']);
    $caps_anime = addslashes($_POST['caps-anime']);
    $w = 1;
    $c = new Contas;
    $c->condAddC($titulo_anime, $caps_anime, 'animes', 'episodios', $tab, $addTab, $w);
    $c->gerarArquivo($titulo_anime ,$caps_anime, 'animes', 'ger_anime', 'episodio');
} else if(isset($_POST['btn-alter-anime']))
{
    require_once('../conexao.php');
    $tab = 'tab-anime';
    $alterTab = 'tab-alter-anime';
    $titulo_anime = addslashes($_POST['titulo-anime']);
    $caps_anime = addslashes($_POST['caps-anime']);
    $c = new Contas;
    $c->condAltC($titulo_anime, $caps_anime, 'animes', 'episodios', $tab, $alterTab);
    $c->gerarArquivo($titulo_anime ,$caps_anime, 'animes', 'ger_anime', 'episodio');
}
?>

<?php 
if(isset($_POST['btn-add-filme']))
{
    require_once('../conexao.php');
    $tab = 'tab-filme';
    $addTab = 'tab-add-filme';
    $titulo_filme = addslashes($_POST['titulo-filme']);
    $caps_filme = addslashes($_POST['caps-filme']);
    $w = 1;
    $c = new Contas;
    $c->condAddC($titulo_filme, $caps_filme, 'filmes', 'partes', $tab, $addTab, $w);
    $c->gerarArquivo($titulo_filme ,$caps_filme, 'filmes', 'ger_filme', 'parte');
} else if(isset($_POST['btn-alter-filme']))
{
    require_once('../conexao.php');
    $tab = 'tab-filme';
    $alterTab = 'tab-alter-filme';
    $titulo_filme = addslashes($_POST['titulo-filme']);
    $caps_filme = addslashes($_POST['caps-filme']);
    $c = new Contas;
    $c->condAltC($titulo_filme, $caps_filme, 'filmes', 'partes', $tab, $alterTab);
    $c->gerarArquivo($titulo_filme ,$caps_filme, 'filmes', 'ger_filme', 'parte');
}
?>

<?php 
if(isset($_POST['btn-add-hq']))
{
    require_once('../conexao.php');
    $tab = 'tab-hq';
    $addTab = 'tab-add-hq';
    $titulo_hq = addslashes($_POST['titulo-hq']);
    $caps_hq = addslashes($_POST['caps-hq']);
    $w = 1;
    $c = new Contas;
    $c->condAddC($titulo_hq, $caps_hq, 'hqs', 'capitulos', $tab, $addTab, $w);
    $c->gerarArquivo($titulo_hq, $caps_hq, 'hqs', 'ger_hq', 'capitulo');
} else if(isset($_POST['btn-alter-hq']))
{
    require_once('../conexao.php');
    $tab = 'tab-hq';
    $alterTab = 'tab-alter-hq';
    $titulo_hq = addslashes($_POST['titulo-hq']);
    $caps_hq = addslashes($_POST['caps-hq']);
    $c = new Contas;
    $c->condAltC($titulo_hq, $caps_hq, 'hqs', 'capitulos', $tab, $alterTab);
    $c->gerarArquivo($titulo_hq, $caps_hq, 'hqs', 'ger_hq', 'capitulo');
}
?>