<?php include 'header.php'; ?>
<style>
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
.tab-hide{
    display: none;
}
.tr {
    display: none;
}
.bg-darkgray {
    background-color: #151515;
}
.white {
    color: #fff;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 border-right bg-light">
            <h2 class="lead text-center h2">Adicionar</h2>
            <form method="post" style="margin-top:10px;">
                <label class="lead float-left" for="add-novel">Adicionar Novel</label>   
                <button value="add-novel" name="add-novel" id="add-novel" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/plus-2x.png">
                </button>
            </form><br><br>
            
            <form method="post">
                <label for="add-manga" class="lead float-left">Adicionar Mangá</label>
                <button value="add-manga" name="add-manga" id="add-manga" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/plus-2x.png">
                </button>
            </form><br><br>
            
            <form method="post">
                <label for="add-anime" class="lead float-left">Adicionar Anime</label>
                <button value="add-anime" name="add-anime" id="add-anime" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/plus-2x.png">
                </button>
            </form><br><br>
            
            <form method="post">
                <label for="add-filme" class="lead float-left">Adicionar Filme</label>
                <button value="add-filme" name="add-filme" id="add-filme" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/plus-2x.png">
                </button>
            </form><br><br>
            
            <form method="post">
                <label for="add-hq" class="lead float-left">Adicionar HQ</label>
                <button value="add-hq" name="add-hq" id="add-hq" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/plus-2x.png">
                </button>
            </form><br><hr>
            <h2 class="lead text-center h2" style="margin-top:-20px;">Alterar</h2>
            <form method="post">
                <label for="alt-novel" class="lead float-left">Alterar Novel</label>
                <button value="alt-novel" name="alt-novel" id="alt-novel" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/pencil-2x.png">
                </button>
            </form><br><br>
            <form method="post">
                <label for="alt-manga" class="lead float-left">Alterar Mangá</label>
                <button value="alt-manga" name="alt-manga" id="alt-manga" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/pencil-2x.png">
                </button>
            </form><br><br>
            <form method="post">
                <label for="alt-anime" class="lead float-left">Alterar Anime</label>
                <button value="alt-anime" name="alt-anime" id="alt-anime" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/pencil-2x.png">
                </button>
            </form><br><br>
            <form method="post">
                <label for="alt-filme" class="lead float-left">Alterar Filme</label>
                <button value="alt-filme" name="alt-filme" id="alt-filme" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/pencil-2x.png">
                </button>
            </form><br><br>
            <form method="post">
                <label for="alt-hq" class="lead float-left">Alterar HQ</label>
                <button value="alt-hq" name="alt-hq" id="alt-hq" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/pencil-2x.png">
                </button>
            </form><br><hr>
            <h2 class="lead text-center h2" style="margin-top:-20px;">Enviar</h2>
            <form method="post">
                <label for="env-filme" class="lead float-left">Enviar Novel</label>
                <button value="env-filme" name="env-filme" id="env-filme" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/check-2x.png">
                </button>
            </form><br><br>
            <form method="post">
                <label for="env-hq" class="lead float-left">Enviar Mangá</label>
                <button value="env-hq" name="env-hq" id="env-hq" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/check-2x.png">
                </button>
            </form><br><br>
            <form method="post">
                <label for="env-filme" class="lead float-left">Enviar Anime</label>
                <button value="env-filme" name="env-filme" id="env-filme" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/check-2x.png">
                </button>
            </form><br><br>
            <form method="post">
                <label for="env-hq" class="lead float-left">Enviar Filme</label>
                <button value="env-hq" name="env-hq" id="env-hq" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/check-2x.png">
                </button>
            </form><br><br>
            <form method="post">
                <label for="env-filme" class="lead float-left">Enviar HQ</label>
                <button value="env-filme" name="env-filme" id="env-filme" class="btn btn-success btn-circle float-right">
                    <img src="../imagens/check-2x.png">
                </button>
            </form>
        </div>
        <div class="col-6 bg-light">
            <div class="alert alert-warning alert-w2" style="width:100%;display:none;" role="alert">Mangá já cadastrado!</div>
            <div class="alert alert-warning alert-w3" style="width:100%;display:none;" role="alert">Anime já cadastrado!</div>
            <div class="alert alert-warning alert-w4" style="width:100%;display:none;" role="alert">Novel já cadastrada!</div>
            <div class="alert alert-warning alert-w5" style="width:100%;display:none;" role="alert">Filme já cadastrado!</div>
            <div class="alert alert-warning alert-w6" style="width:100%;display:none;" role="alert">HQ já cadastrada!</div>
            <div class="alert alert-warning alert-w7" style="width:100%;display:none;" role="alert">Tabela não Existe!</div>
            <form method="post">
                <table class="table table-striped table-hover tab-hide tab-novel tab-manga tab-anime tab-filme tab-hq text-center">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Capítulo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php if(isset($_POST['add-novel']) || isset($_POST['alt-novel'])) { ?>
                                <td>
                                    <input type="text" class="form-control text-center" id="titulo-novel" name="titulo-novel">
                                </td>
                                <td>
                                    <input type="text" class="form-control text-center" id="caps-novel" name="caps-novel">
                                </td>
                            <?php } else if(isset($_POST['add-manga']) || isset($_POST['alt-manga'])) { ?>
                                <td>
                                    <input type="text" class="form-control text-center" id="titulo-manga" name="titulo-manga">
                                </td>
                                <td>
                                    <input type="text" class="form-control text-center" id="caps-manga" name="caps-manga">
                                </td>
                            <?php } else if(isset($_POST['add-anime']) || isset($_POST['alt-anime'])) { ?>
                                <td>
                                    <input type="text" class="form-control text-center" id="titulo-anime" name="titulo-anime">
                                </td>
                                <td>
                                    <input type="text" class="form-control text-center" id="caps-anime" name="caps-anime">
                                </td>
                            <?php } else if(isset($_POST['add-filme']) || isset($_POST['alt-filme'])) { ?>
                                <td>
                                    <input type="text" class="form-control text-center" id="titulo-filme" name="titulo-filme">
                                </td>
                                <td>
                                    <input type="text" class="form-control text-center" id="caps-filme" name="caps-filme">
                                </td>
                            <td>
                            <?php } else if(isset($_POST['add-hq']) || isset($_POST['alt-hq'])) { ?>
                                <td>
                                    <input type="text" class="form-control text-center" id="titulo-hq" name="titulo-hq">
                                </td>
                                <td>
                                    <input type="text" class="form-control text-center" id="caps-hq" name="caps-hq">
                                </td>
                            <?php } if(isset($_POST['add-novel'])) {?>
                                <td>
                                    <button class="btn btn-success btn-circle" id="btn-add-novel" name="btn-add-novel">
                                        <img src="../imagens/plus-2x.png">
                                    </button>
                                </td>
                                <?php } else if(isset($_POST['alt-novel'])) { ?>
                                    <td>
                                        <button class="btn btn-success btn-circle" id="btn-alter-novel" name="btn-alter-novel">
                                            <img src="../imagens/pencil-2x.png">
                                        </button>
                                    </td>
                                <?php } else if(isset($_POST['add-manga'])) { ?>
                                    <td>
                                        <button class="btn btn-success btn-circle" id="btn-add-manga" name="btn-add-manga">
                                            <img src="../imagens/plus-2x.png">
                                        </button>
                                    </td>
                                <?php } else if(isset($_POST['alt-manga'])) { ?>
                                    <td>
                                        <button class="btn btn-success btn-circle" id="btn-alter-manga" name="btn-alter-manga">
                                            <img src="../imagens/pencil-2x.png">
                                        </button>
                                    </td>
                                <?php } else if(isset($_POST['add-anime'])) { ?>
                                    <td>
                                        <button class="btn btn-success btn-circle" id="btn-add-anime" name="btn-add-anime">
                                            <img src="../imagens/plus-2x.png">
                                        </button>
                                    </td>
                                <?php } else if(isset($_POST['alt-anime'])) { ?>
                                    <td>
                                        <button class="btn btn-success btn-circle" id="btn-alter-anime" name="btn-alter-anime">
                                            <img src="../imagens/pencil-2x.png">
                                        </button>
                                    </td>
                                <?php } else if(isset($_POST['add-filme'])) { ?>
                                    <button class="btn btn-success btn-circle" id="btn-add-filme" name="btn-add-filme">
                                        <img src="../imagens/plus-2x.png">
                                    </button>
                                <?php } else if(isset($_POST['alt-filme'])) { ?>
                                    <button class="btn btn-success btn-circle" id="btn-alter-filme" name="btn-alter-filme">
                                        <img src="../imagens/pencil-2x.png">
                                    </button>
                                <?php } else if(isset($_POST['add-hq'])) { ?>
                                    <td>
                                        <button class="btn btn-success btn-circle" id="btn-add-hq" name="btn-add-hq">
                                            <img src="../imagens/plus-2x.png">
                                        </button>
                                    </td>
                                <?php } else if(isset($_POST['alt-hq'])) { ?>
                                    <td>
                                        <button class="btn btn-success btn-circle" id="btn-alter-hq" name="btn-alter-hq">
                                            <img src="../imagens/pencil-2x.png">
                                        </button>
                                    </td>
                                <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </form>
            <!-- Tabelas add capítulos -->
            <table class="table table-striped table-hover text-center tab-alter-novel tab-add-novel tab-hide">
                <thead>
                    <th>Título</th>
                    <th>Capítulo</th>
                    <th>link</th>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['btn-add-novel']))
                        {
                            require 'adm_help.php';
                            for($i = 1; $i <= $caps_novel; $i++)
                            { ?>
                                <tr>
                                    <td><?php echo $titulo_novel; ?></td>
                                    <td><?php echo 'Capítulo '. $i; ?></td>
                                    <td><a href="../novels/<?php echo $titulo_novel; ?>/<?php echo 'capitulo-'.$i; ?>" class="btn btn-link"><?php echo 'Capítulo '. $i; ?></a></td>
                                </tr>
                        <?php    }} 
                            else if(isset($_POST['btn-alter-novel'])) {
                            require('adm_help.php');
                            for($i = 1; $i <= $caps_novel; $i++) { ?>
                                <tr>
                                    <td><?php echo $titulo_novel; ?></td>
                                    <td><?php echo 'Capítulo '. $i; ?></td>
                                    <td><a href="../novels/<?php echo $titulo_novel; ?>/<?php echo 'capitulo-'.$i; ?>" class="btn btn-link"><?php echo 'Capítulo '. $i; ?></a></td>
                                </tr>
                        <?php }} ?>        
                </tbody>
            </table>
            <table class="table table-striped table-hover text-center tab-alter-manga tab-add-manga tab-hide">
                <thead>
                    <th>Título</th>
                    <th>Capítulo</th>
                    <th>link</th>
                </thead>
                <tbody>
                    <?php if(isset($_POST['btn-add-manga'])) { require('arquivos.php'); } ?>
                </tbody>
            </table>
            <table class="table table-striped table-hover text-center tab-alter-anime tab-add-anime tab-hide">
                <thead>
                    <th>Título</th>
                    <th>Capítulo</th>
                    <th>link</th>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['btn-add-anime']))
                        {
                            require 'adm_help.php';
                            for($i = 1; $i <= $caps_anime; $i++)
                            { ?>
                                <tr>
                                    <td><?php echo $titulo_anime; ?></td>
                                    <td><?php echo 'Episódio '. $i; ?></td>
                                    <td><a href="../animes/<?php echo $titulo_anime; ?>/<?php echo 'episodio-'.$i; ?>" class="btn btn-link"><?php echo 'Episódio '. $i; ?></a></td>
                                </tr>
                        <?php    }} 
                            else if(isset($_POST['btn-alter-anime'])) {
                            require('adm_help.php');
                            for($i = 1; $i <= $caps_anime; $i++) { ?>
                                <tr>
                                    <td><?php echo $titulo_anime; ?></td>
                                    <td><?php echo 'Episódio '. $i; ?></td>
                                    <td><a href="../animes/<?php echo $titulo_anime; ?>/<?php echo 'episodio-'.$i; ?>" class="btn btn-link"><?php echo 'Episódio '. $i; ?></a></td>
                                </tr>
                        <?php }} ?>        
                </tbody>
            </table>
            <table class="table table-striped table-hover text-center tab-alter-filme tab-add-filme tab-hide">
                <thead>
                    <th>Título</th>
                    <th>Parte</th>
                    <th>link</th>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['btn-add-filme']))
                        {
                            require 'adm_help.php';
                            for($i = 1; $i <= $caps_filme; $i++)
                            { ?>
                                <tr>
                                    <td><?php echo $titulo_filme; ?></td>
                                    <td><?php echo 'Parte '. $i; ?></td>
                                    <td><a href="../filmes/<?php echo $titulo_filme; ?>/<?php echo 'parte-'.$i; ?>" class="btn btn-link"><?php echo 'Parte '. $i; ?></a></td>
                                </tr>
                        <?php    }} 
                            else if(isset($_POST['btn-alter-filme'])) {
                            require('adm_help.php');
                            for($i = 1; $i <= $caps_filme; $i++) { ?>
                                <tr>
                                    <td><?php echo $titulo_filme; ?></td>
                                    <td><?php echo 'Parte '. $i; ?></td>
                                    <td><a href="../filmes/<?php echo $titulo_filme; ?>/<?php echo 'parte-'.$i; ?>" class="btn btn-link"><?php echo 'Parte '. $i; ?></a></td>
                                </tr>
                        <?php }} ?>        
                </tbody>
            </table>
            <table class="table table-striped table-hover text-center tab-alter-hq tab-add-hq tab-hide">
                <thead>
                    <th>Título</th>
                    <th>Capítulo</th>
                    <th>link</th>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['btn-add-hq']))
                        {
                            require 'adm_help.php';
                            for($i = 1; $i <= $caps_hq; $i++)
                            { ?>
                                <tr>
                                    <td><?php echo $titulo_hq; ?></td>
                                    <td><?php echo 'Capítulo '. $i; ?></td>
                                    <td><a href="../hqs/<?php echo $titulo_hq; ?>/<?php echo 'capitulo-'.$i; ?>" class="btn btn-link"><?php echo 'Capítulo '. $i; ?></a></td>
                                </tr>
                        <?php    }} 
                            else if(isset($_POST['btn-alter-hq'])) {
                            require('adm_help.php');
                            for($i = 1; $i <= $caps_hq; $i++) { ?>
                                <tr>
                                    <td><?php echo $titulo_hq; ?></td>
                                    <td><?php echo 'Capítulo '. $i; ?></td>
                                    <td><a href="../hqs/<?php echo $titulo_hq; ?>/<?php echo 'capitulo-'.$i; ?>" class="btn btn-link"><?php echo 'Capítulo '. $i; ?></a></td>
                                </tr>
                        <?php }} ?>        
                </tbody>
            </table>
        </div>
        <div class="col-3 bg-light border-left">
            <table class="table table-striped table-hover text-center tab-novels tab-hide">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Capítulo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($_POST['btn-add-novel']) || isset($_POST['btn-alter-novel']) || isset($_POST['add-novel']) || isset($_POST['alt-novel'])) {
                        require('adm_help.php');
                        while($dado = $con->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $dado['id']; ?></td>
                            <td><?php echo $dado['titulo']; ?></td>
                            <td><?php echo $dado['capitulos']; ?></td>
                        </tr>
                    <?php }} ?>
                </tbody>
            </table>
            <table class="table table-striped table-hover text-center tab-mangas tab-hide">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Capítulo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($_POST['btn-add-manga']) || isset($_POST['btn-alter-manga']) || isset($_POST['add-manga']) || isset($_POST['alt-manga'])) {
                        require('adm_help.php');
                        while($dado = $con->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $dado['id']; ?></td>
                            <td><?php echo $dado['titulo']; ?></td>
                            <td><?php echo $dado['capitulos']; ?></td>
                        </tr>
                    <?php }} ?>
                </tbody>
            </table>
            <table class="table table-striped table-hover text-center tab-animes tab-hide">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Episódio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($_POST['btn-add-anime']) || isset($_POST['btn-alter-anime']) || isset($_POST['add-anime']) || isset($_POST['alt-anime'])) {
                        require('adm_help.php');
                        while($dado = $con->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $dado['id']; ?></td>
                            <td><?php echo $dado['titulo']; ?></td>
                            <td><?php echo $dado['episodios']; ?></td>
                        </tr>
                    <?php }} ?>
                </tbody>
            </table>
            <table class="table table-striped table-hover text-center tab-filmes tab-hide">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Parte</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($_POST['btn-add-filme']) || isset($_POST['btn-alter-filme']) || isset($_POST['add-filme']) || isset($_POST['alt-filme'])) {
                        require('adm_help.php');
                        while($dado = $con->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $dado['id']; ?></td>
                            <td><?php echo $dado['titulo']; ?></td>
                            <td><?php echo $dado['partes']; ?></td>
                        </tr>
                    <?php }} ?>
                </tbody>
            </table>
            <table class="table table-striped table-hover text-center tab-hqs tab-hide">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Capítulo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($_POST['btn-add-hq']) || isset($_POST['btn-alter-hq']) || isset($_POST['add-hq']) || isset($_POST['alt-hq'])) {
                        require('adm_help.php');
                        while($dado = $con->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $dado['id']; ?></td>
                            <td><?php echo $dado['titulo']; ?></td>
                            <td><?php echo $dado['capitulos']; ?></td>
                        </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
<?php if(isset($_POST['add-novel'])) {?><script>$('table.tab-novel').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['add-manga'])) {?><script>$('table.tab-manga').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['add-anime'])) {?><script>$('table.tab-anime').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['add-filme'])) {?><script>$('table.tab-filme').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['add-hq'])) {?><script>$('table.tab-hq').removeClass('tab-hide')</script><?php } ?>

<?php if(isset($_POST['alt-novel'])) {?><script>$('table.tab-novel').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['alt-manga'])) {?><script>$('table.tab-manga').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['alt-anime'])) {?><script>$('table.tab-anime').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['alt-filme'])) {?><script>$('table.tab-filme').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['alt-hq'])) {?><script>$('table.tab-hq').removeClass('tab-hide')</script><?php } ?>

<?php if(isset($_POST['env-novel'])) { require('adm_help.php'); } ?>
<?php if(isset($_POST['env-manga'])) { require('adm_help.php'); } ?>
<?php if(isset($_POST['env-anime'])) { require('adm_help.php'); } ?>
<?php if(isset($_POST['env-filme'])) { require('adm_help.php'); } ?>
<?php if(isset($_POST['env-hq'])) { require('adm_help.php'); } ?>


<script>
    let clicks = 0;
    $('.tab-novels').ready(function() {
        $('.tr').css('display', 'none')
    })
    $('.tr-show').click(function() {
        if(clicks % 2 == 0)
        {
            $('tr').css('display', 'block')
            clicks++   
        }
        else
        {
            $('.tr').css('display', 'none')
            clicks++
        }
    })
</script>