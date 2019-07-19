<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Área De Busca</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="Formulario" method="post">
                        <div id="pesquisa_manga" class="modal-body">
                            <input type="text" autocomplete="off" onkeyup="showHint(this.value)" id="pesquisa" class="form-control" placeholder="Digite que hq deseja buscar">
                            <div id="mangas">
                                <h5 id="titulo" class="lead"></h5><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3 bg-darkgray" style="padding-top:400px;"></div>
        <div class="col-9 bg-darkgray" style="padding-top:400px;"></div>
    </div>
</div>