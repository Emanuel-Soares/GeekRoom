<div class="jumbotron-fluid" style="padding:200px;">
    <div id="slide" style="position:absolute;top:0px;left:0px;right:0px;height:auto;display:block;" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../imagens/mangas/returners_magic.jpeg" style="height:400px;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../imagens/mangas/sorcerer_king.jpeg" class="d-block w-100" style="height:400px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../imagens/mangas/solo_leveling.jpg" class="d-block w-100" style="height:400px;" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<?php require 'header.php'; ?>
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
                            <input type="text" autocomplete="off" onkeyup="showHint(this.value)" id="pesquisa" class="form-control" placeholder="Digite que mangá deseja buscar">
                            <div id="mangas">
                                <h5 id="titulo" class="lead"></h5><br>
                                <img id="imgs" src="../imagens/mangas/solo_leveling.jpg" style="height:20px;width:20px;display:none;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function showHint(str) {
              var xhttp;
              if (str.length == 0) { 
                document.getElementById("titulo").innerHTML = "";
                return;
              }
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("titulo").innerHTML = this.responseText;
                }
              };
              xhttp.open("GET", "gethint.php?m="+str, true);
              xhttp.send();   
            }
        </script>

        <div id="rec-mang" class="col-3 bg-darkgray"> <!-- recomendados -->
            <h2 class="lead text-center h2 white">Recomendados</h2><hr>            
            <div class="card" style="width: 100%;">
                <img style="width:auto;height:200px;" class="card-img-top" src="../imagens/mangas/solo_leveling.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Solo Leveling</h5>
                    <p class="card-text">Dez anos atrás, depois do "Portal" que conecta o mundo real com um mundo de monstros se abriu...</p>
                        <a href="#" class="btn btn-primary a">Ler Mais</a>
                </div>
            </div>
            <hr style="margin-bottom:10px;">
            <div class="card" style="width: 100%;">
                <img style="width:auto;height:200px;" class="card-img-top" src="../imagens/mangas/returners_magic.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Returner's Magic Should Be Special</h5>
                    <p class="card-text">"Agora que estou de volta, não permitirei que aqueles que amo morram outra vez!" O Labirinto Sombrio...</p>
                    <a href="#" class="btn btn-primary a">Trocar imagem</a>
                </div>
            </div>
            <hr style="margin-bottom:10px;">
            <div class="card" style="width: 100%;">
                <img style="width:auto;height:200px;" class="card-img-top" src="../imagens/mangas/sorcerer_king.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">I Am The Sorcerer King</h5>
                    <p class="card-text">10 anos atrás, a horda de monstros da fenda formada da distorção do tempo e espaço iniciaram um ataque contra a humanidade...</p>
                    <a href="#" class="btn btn-primary a">Ler Mais</a>
                </div>
            </div>
            <hr style="margin-bottom:10px;">
            <div class="card" style="width: 100%;">
                <img style="width:auto;height:200px;" class="card-img-top" src="../imagens/mangas/solo_leveling.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary a">Ler Mais</a>
                </div>
            </div>
            <hr style="margin-bottom:10px;">
            <div class="card" style="width: 100%;">
                <img style="width:auto;height:200px;" class="card-img-top" src="../imagens/mangas/solo_leveling.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary a">Ler Mais</a>
                </div>
            </div>
            <hr style="margin-bottom:10px;">
            <div class="card" style="width: 100%;">
                <img style="width:auto;height:200px;" class="card-img-top" src="../imagens/mangas/solo_leveling.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary a">Ler Mais</a>
                </div>
            </div>
            <hr style="margin-bottom:10px;">
        </div>

        <div class="col-9 bg-darkgray"> <!-- Lançamentos -->
            <h2 class="display-4 lead text-center white">Lançamentos</h2><hr>

            <div class="container-fluid">
                <div class="card bg-dark text-white">
                    <img class="card-img" style="height:200px;" src="../imagens/mangas/solo_leveling.jpg" alt="Card image">
                    <div class="card-img-overlay card-lanc">
                        <h5 class="card-title">Solo Leveling</h5>
                        <p class="card-text">Dez anos atrás, depois do "Portal" que conecta o mundo real com um mundo de monstros se abriu, algumas pessoas comuns receberam o poder de caçar os monstros do portal. Eles são conhecidos como caçadores...</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <hr>
                <div class="card bg-dark text-white">
                    <img class="card-img" style="height:200px;" src="../imagens/mangas/returners_magic.jpeg" alt="Card image">
                    <div class="card-img-overlay card-lanc">
                        <h5 class="card-title">A Returners Magic Should Be Special</h5>
                        <p class="card-text">"Agora que estou de volta, não permitirei que aqueles que amo morram outra vez!" O Labirinto Sombrio - A catástrofe mais mortífera que a humanidade tem conhecimento...<p>
                        <p class="card-text">Cap. 70</p>
                    </div>
                </div>
                <hr>
                <div class="card bg-dark text-white">
                    <img class="card-img" style="height:200px;" src="../imagens/mangas/sorcerer_king.jpeg" alt="Card image">
                    <div class="card-img-overlay card-lanc">
                        <h5 class="card-title">I Am The Sorcerer King</h5>
                        <p class="card-text">10 anos atrás, a horda de monstros da fenda formada da distorção do tempo e espaço iniciaram um ataque contra a humanidade...<p>
                        <p class="card-text">Cap. 16</p>
                    </div>
                </div>
                <hr>
                <div class="card bg-dark text-white">
                    <img class="card-img" style="height:200px;" src="../imagens/mangas/solo_leveling.jpg" alt="Card image">
                    <div class="card-img-overlay card-lanc">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><p>
                        <p class="card-text"></p>
                    </div>
                </div>
                <hr>
                <div class="card bg-dark text-white">
                    <img class="card-img" style="height:200px;" src="../imagens/mangas/solo_leveling.jpg" alt="Card image">
                    <div class="card-img-overlay card-lanc">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><p>
                        <p class="card-text"></p>
                    </div>
                </div>
                <hr>
                <div class="card bg-dark text-white">
                    <img class="card-img" style="height:200px;" src="../imagens/mangas/solo_leveling.jpg" alt="Card image">
                    <div class="card-img-overlay card-lanc">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><p>
                        <p class="card-text"></p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="table-mang">
                <table class="table table-dark table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>Mangás</th>
                            <th>SEG</th>
                            <th>TER</th>
                            <th>QUA</th>
                            <th>QUI</th>
                            <th>SEX</th>
                            <th>SÁB</th>
                            <th>DOM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th name="manga-1" scope="row" class="border-right">1</th>
                            <td name="m1-1">mangá</td>
                            <td name="m2-1">mangá</td>
                            <td name="m3-1">mangá</td>
                            <td name="m4-1">mangá</td>
                            <td name="m5-1">mangá</td>
                            <td name="m6-1">mangá</td>
                            <td name="m7-1">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-2" scope="row" class="border-right">2</th>
                            <td name="m1-2">mangá</td>
                            <td name="m2-2">mangá</td>
                            <td name="m3-2">mangá</td>
                            <td name="m4-2">mangá</td>
                            <td name="m5-2">mangá</td>
                            <td name="m6-2">mangá</td>
                            <td name="m7-2">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-3" scope="row" class="border-right">3</th>
                            <td name="m1-3">mangá</td>
                            <td name="m2-3">mangá</td>
                            <td name="m3-3">mangá</td>
                            <td name="m4-3">mangá</td>
                            <td name="m5-3">mangá</td>
                            <td name="m6-3">mangá</td>
                            <td name="m7-3">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-4" scope="row" class="border-right">4</th>
                            <td name="m1-4">mangá</td>
                            <td name="m2-4">mangá</td>
                            <td name="m3-4">mangá</td>
                            <td name="m4-4">mangá</td>
                            <td name="m5-4">mangá</td>
                            <td name="m6-4">mangá</td>
                            <td name="m7-4">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-5" scope="row" class="border-right">5</th>
                            <td name="m1-5">mangá</td>
                            <td name="m2-5">mangá</td>
                            <td name="m3-5">mangá</td>
                            <td name="m4-5">mangá</td>
                            <td name="m5-5">mangá</td>
                            <td name="m6-5">mangá</td>
                            <td name="m7-5">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-6" scope="row" class="border-right">6</th>
                            <td  name="m1-6">mangá</td>
                            <td  name="m2-6">mangá</td>
                            <td  name="m3-6">mangá</td>
                            <td  name="m4-6">mangá</td>
                            <td  name="m5-6">mangá</td>
                            <td  name="m6-6">mangá</td>
                            <td  name="m7-6">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-7" scope="row" class="border-right">7</th>
                            <td name="m1-7">mangá</td>
                            <td name="m2-7">mangá</td>
                            <td name="m3-7">mangá</td>
                            <td name="m4-7">mangá</td>
                            <td name="m5-7">mangá</td>
                            <td name="m6-7">mangá</td>
                            <td name="m7-7">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-8" scope="row" class="border-right">8</th>
                            <td name="m1-8">mangá</td>
                            <td name="m2-8">mangá</td>
                            <td name="m3-8">mangá</td>
                            <td name="m4-8">mangá</td>
                            <td name="m5-8">mangá</td>
                            <td name="m6-8">mangá</td>
                            <td name="m7-8">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-9" scope="row" class="border-right">9</th>
                            <td name="m1-9">mangá</td>
                            <td name="m2-9">mangá</td>
                            <td name="m3-9">mangá</td>
                            <td name="m4-9">mangá</td>
                            <td name="m5-9">mangá</td>
                            <td name="m6-9">mangá</td>
                            <td name="m7-9">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-10" scope="row" class="border-right">10</th>
                            <td name="m1-10">mangá</td>
                            <td name="m2-10">mangá</td>
                            <td name="m3-10">mangá</td>
                            <td name="m4-10">mangá</td>
                            <td name="m5-10">mangá</td>
                            <td name="m6-10">mangá</td>
                            <td name="m7-10">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-11" scope="row" class="border-right">11</th>
                            <td name="m1-11">mangá</td>
                            <td name="m2-11">mangá</td>
                            <td name="m3-11">mangá</td>
                            <td name="m4-11">mangá</td>
                            <td name="m5-11">mangá</td>
                            <td name="m6-11">mangá</td>
                            <td name="m7-11">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-12" scope="row" class="border-right">12</th>
                            <td name="m1-12">mangá</td>
                            <td name="m2-12">mangá</td>
                            <td name="m3-12">mangá</td>
                            <td name="m4-12">mangá</td>
                            <td name="m5-12">mangá</td>
                            <td name="m6-12">mangá</td>
                            <td name="m7-12">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-13" scope="row" class="border-right">13</th>
                            <td name="m1-13">mangá</td>
                            <td name="m2-13">mangá</td>
                            <td name="m3-13">mangá</td>
                            <td name="m4-13">mangá</td>
                            <td name="m5-13">mangá</td>
                            <td name="m6-13">mangá</td>
                            <td name="m7-13">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-14" scope="row" class="border-right">14</th>
                            <td name="m1-14">mangá</td>
                            <td name="m2-14">mangá</td>
                            <td name="m3-14">mangá</td>
                            <td name="m4-14">mangá</td>
                            <td name="m5-14">mangá</td>
                            <td name="m6-14">mangá</td>
                            <td name="m7-14">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-15" scope="row" class="border-right">15</th>
                            <td name="m1-15">mangá</td>
                            <td name="m2-15">mangá</td>
                            <td name="m3-15">mangá</td>
                            <td name="m4-15">mangá</td>
                            <td name="m5-15">mangá</td>
                            <td name="m6-15">mangá</td>
                            <td name="m7-15">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-16" scope="row" class="border-right">16</th>
                            <td name="m1-16">mangá</td>
                            <td name="m2-16">mangá</td>
                            <td name="m3-16">mangá</td>
                            <td name="m4-16">mangá</td>
                            <td name="m5-16">mangá</td>
                            <td name="m6-16">mangá</td>
                            <td name="m7-16">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-17" scope="row" class="border-right">17</th>
                            <td name="m1-17">mangá</td>
                            <td name="m2-17">mangá</td>
                            <td name="m3-17">mangá</td>
                            <td name="m4-17">mangá</td>
                            <td name="m5-17">mangá</td>
                            <td name="m6-17">mangá</td>
                            <td name="m7-17">mangá</td>
                        </tr>
                        <tr name="manga-18">
                            <th scope="row" class="border-right">18</th>
                            <td name="m1-18">mangá</td>
                            <td name="m2-18">mangá</td>
                            <td name="m3-18">mangá</td>
                            <td name="m4-18">mangá</td>
                            <td name="m5-18">mangá</td>
                            <td name="m6-18">mangá</td>
                            <td name="m7-18">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-19" scope="row" class="border-right">19</th>
                            <td name="m1-19">mangá</td>
                            <td name="m2-19">mangá</td>
                            <td name="m3-19">mangá</td>
                            <td name="m4-19">mangá</td>
                            <td name="m5-19">mangá</td>
                            <td name="m6-19">mangá</td>
                            <td name="m7-19">mangá</td>
                        </tr>
                        <tr>
                            <th name="manga-20" scope="row" class="border-right">20</th>
                            <td name="m1-20">mangá</td>
                            <td name="m2-20">mangá</td>
                            <td name="m3-20">mangá</td>
                            <td name="m4-20">mangá</td>
                            <td name="m5-20">mangá</td>
                            <td name="m6-20">mangá</td>
                            <td name="m7-20">mangá</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
