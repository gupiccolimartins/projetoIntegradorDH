<meta charset="UTF-8" />
<link href="./css/estilo_feed.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<!-- <div class="container col-md-8"> -->
<!-- Section dos feeds -->
<!-- Aqui vem meu codigo - tem que utilizar bootstrap -->
<section class="div_detalhe_items">
    <div class="container">
        <div class="col-md-10 mb-md-0 mb-5">
            <form action="PHP/file.php" method="POST" enctype="multipart/form-data">
                <div class="container row">
                    <div id="camera_div">
                        <a href="#">
                            <img src="img/icons/camera.png" alt="Seleccionar imagem" title="Seleccionar imagem" />
                        </a>
                    </div>

                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('img/itens/newItem.PNG');">
                            </div>
                        </div>
                    </div>
                    <div id="trash_div">
                        <a href="#">
                            <img src="img/icons/trash.png" alt="Descartar imagem" title="Descartar imagem" />
                        </a>
                    </div>
                </div>
        </div>

        <!-- Inserir java script para atualizar imagem da tela -->
        <script src="../js/rendered-js.js"></script>
        <div class="row">
            <!--Grid column-->
            <div class="col-md-10">
                <div class="md-form mb-0">
                    <label for="name" class="">Nome</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <!--Grid column-->
            <div class="col-md-10">
                <div class="md-form mb-0">
                    <label for="message">Descrição</label>
                    <textarea type="text" id="message" name="message" rows="3"
                        class="form-control md-textarea"></textarea>
                </div>
            </div>
        </div>

        <!-- Disponibilidade do item -->

        <div class="col-md-12" style="text-align:left;">
            <div id="calendar_div" class="col-md-2">
                <label for="disponibilidade">Disponibilidade</label>
            </div>
            <!-- Date Picker -->
            <div class="col-md-10 mb-4;">
                <img src="img/icons/calendar.png" alt="Selecionar data" title="Selecionar data" />
                <label for="meetingInicio">Inicio : </label><input id="meetingInicio" type="date" value="2020-05-20" />
                <label for="meetingFim">Fim : </label><input id="meetingFim" type="date" value="2020-05-30" />
            </div>

            <div class="row">
                <div class="col-md-10 mb-6; text-right text-md-right">
                    <br><a button type="button" class="btn btn-outline-secondary btn-lg">Cadastar</button></a>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>