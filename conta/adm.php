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
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 bg-light border-right">
            
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
            </form>
        </div>
        <div class="col-6 bg-light">
            <div class="col-3 bg-light border-left">
            <table class="table table-striped table-hover tab-hide tab-novel">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Notas</th>
                        <th>Assinaturas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" id="id" name="id" class="form-control">
                        </td>
                        <td>
                            <input type="text" id="titulo" name="titulo" class="form-control">   
                        </td>
                        <td>
                            <p class="lead nota-novel"></p>
                        </td>
                        <td>
                            <p class="lead assin-novel"></p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped table-hover tab-hide tab-manga text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Assinaturas</th>
                        <th>Título</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped table-hover tab-hide tab-anime text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Assinaturas</th>
                        <th>Título</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped table-hover tab-hide tab-filme text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Assinaturas</th>
                        <th>Título</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped table-hover tab-hide tab-hq text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Assinaturas</th>
                        <th>Título</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        
    </div>
</div>

<?php include '../footer.php'; ?>

<?php if(isset($_POST['add-novel'])) {?><script>$('table.tab-novel').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['add-manga'])) {?><script>$('table.tab-manga').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['add-anime'])) {?><script>$('table.tab-anime').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['add-filme'])) {?><script>$('table.tab-filme').removeClass('tab-hide')</script><?php } ?>
<?php if(isset($_POST['add-hq'])) {?><script>$('table.tab-hq').removeClass('tab-hide')</script><?php } ?>