
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/estilo_CadItemMod.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- <div class="container col-md-8"> -->
                    <!-- Section dos feeds -->
                    <!-- Aqui vem meu codigo - tem que utilizar bootstrap -->
  <section class="div_feed_items">
  <h2> Comece a compartilhar! </h2>
      <div class="container">
        <div class="col-md-9 mb-md-0 mb-5">
            <form action="PHP/file.php" mothod="POST" enctype="multipart/form-data">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                    </div>
                        <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(img/itens/newItem.PNG);">
                          </div>
                          <h6><small>clique na imagem para iniciar</small></h6>
                        </div>
                  </div>
        </div>

                            <!-- Inserir java script para atualizar imagem da tela -->
                            <script src="../js/rendered-js.js"></script>
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">nome do item</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <textarea type="text" id="message" name="message" rows="12"
                                            class="form-control md-textarea"></textarea>
                                        <label for="message">Insidra a descrição do item</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Disponibilidade do item -->

<div class="container col-md-12 mb-5" style="text-align:left;">
    <h3><br> Disponibilidade</h3> 
    <div class="row" >
        <div class="col-12" style="text-align:left; border-bottom:1px solid #ccc;">
            <h4>dom a seg das: 9:00 as 18:00 </h4>
        </div>
            <div class="col-md-12 mb-6; text-right text-md-right">
                <br><a button type="button" class="btn btn-outline-secondary btn-lg">Cadastar</button></a>
            </div>
    </div>
</div>

            </form>
      <!-- </div> -->
