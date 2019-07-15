<?php 
require_once('../conexao.php'); 
if(isset($_POST['btn-add-manga']) || isset($_POST['btn-alter-manga']) || isset($_POST['add-manga']) || isset($_POST['alt-manga']))
{
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
    $tab = 'tab-novel';
    $addTab = 'tab-add-novel';
    $titulo_novel = addslashes($_POST['titulo-novel']);
    $caps_novel = addslashes($_POST['caps-novel']);
    $w = 1;
    $c = new Contas;
    $c->condAddC($titulo_novel, $caps_novel, 'novels', 'capitulos', $tab, $addTab, $w);
} else if(isset($_POST['btn-alter-novel']))
{
    $tab = 'tab-novel';
    $alterTab = 'tab-alter-novel';
    $titulo_novel = addslashes($_POST['titulo-novel']);
    $caps_novel = addslashes($_POST['caps-novel']);
    $c = new Contas;
    $c->condAltC($titulo_novel, $caps_novel, 'novels', 'capitulos', $tab, $alterTab);
}
?>

<?php
if(isset($_POST['btn-add-manga']))
{
    $tab = 'tab-manga';
    $addTab = 'tab-add-manga';
    $titulo_manga = addslashes($_POST['titulo-manga']);
    $caps_manga = addslashes($_POST['caps-manga']);
    $w = 1;
    $c = new Contas;
    $c->condAddC($titulo_manga, $caps_manga, 'mangas', 'capitulos', $tab, $addTab, $w);
} else if(isset($_POST['btn-alter-manga']))
{
    $tab = 'tab-manga';
    $alterTab = 'tab-alter-manga';
    $titulo_manga = addslashes($_POST['titulo-manga']);
    $caps_manga = addslashes($_POST['caps-manga']);
    $c = new Contas;
    $c->condAltC($titulo_manga, $caps_manga, 'mangas', 'capitulos', $tab, $alterTab);
}
?>

<?php
if(isset($_POST['btn-add-anime']))
{
    $tab = 'tab-anime';
    $addTab = 'tab-add-anime';
    $titulo_anime = addslashes($_POST['titulo-anime']);
    $caps_anime = addslashes($_POST['caps-anime']);
    $w = 1;
    $c = new Contas;
    $c->condAddC($titulo_anime, $caps_anime, 'animes', 'episodios', $tab, $addTab, $w);
} else if(isset($_POST['btn-alter-anime']))
{
    $tab = 'tab-anime';
    $alterTab = 'tab-alter-anime';
    $titulo_anime = addslashes($_POST['titulo-anime']);
    $caps_anime = addslashes($_POST['caps-anime']);
    $c = new Contas;
    $c->condAltC($titulo_anime, $caps_anime, 'animes', 'episodios', $tab, $alterTab);
}
?>

<?php 
if(isset($_POST['btn-add-filme']))
{
    $tab = 'tab-filme';
    $addTab = 'tab-add-filme';
    $titulo_filme = addslashes($_POST['titulo-filme']);
    $caps_filme = addslashes($_POST['caps-filme']);
    $w = 4;
    $c = new Contas;
    $c->condAddC($titulo_filme, $caps_filme, 'filmes', 'partes', $tab, $addTab, $w);
} else if(isset($_POST['btn-alter-filme']))
{
    $tab = 'tab-filme';
    $alterTab = 'tab-alter-filme';
    $titulo_filme = addslashes($_POST['titulo-filme']);
    $caps_filme = addslashes($_POST['caps-filme']);
    $c = new Contas;
    $c->condAltC($titulo_filme, $caps_filme, 'filmes', 'partes', $tab, $alterTab);
}
?>

<?php 
if(isset($_POST['btn-add-hq']))
{
    $tab = 'tab-hq';
    $addTab = 'tab-add-hq';
    $titulo_hq = addslashes($_POST['titulo-hq']);
    $caps_hq = addslashes($_POST['caps-hq']);
    $w = 5;
    $c = new Contas;
    $c->condAddC($titulo_hq, $caps_hq, 'hqs', 'capitulos', $tab, $addTab, $w);
} else if(isset($_POST['btn-alter-hq']))
{
    $tab = 'tab-hq';
    $alterTab = 'tab-alter-hq';
    $titulo_hq = addslashes($_POST['titulo-hq']);
    $caps_hq = addslashes($_POST['caps-hq']);
    $c = new Contas;
    $c->condAltC($titulo_hq, $caps_hq, 'hqs', 'capitulos', $tab, $alterTab);
}
?>