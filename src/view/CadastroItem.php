<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Itens</title>
    <link href="./css/estilo_CadItemMod.css
    " rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<body>

    <header>
        <?php include('./Header.php'); ?>
    </header>

    <main class="main">
        <div class="col-md-12">
            <div class="row ">
                <div class="container col-md-4">
                    <!-- Including the left panel with the UserData -->
                    <?php include('./UserData.php');?>
                </div>
                <div class="container col-md-8">
                    <!-- Section dos feeds -->
                    <!-- Aqui vem meu codigo - tem que utilizar bootstrap -->
                    <section class="div_feed_items">
                        <h2> Comece a compartilhar! </h2>
                        <div class="container">
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form action="PHP/file.php" mothod="POST" enctype="multipart/form-data">
                                    <h3><small>clique na imagem para iniciar</small></h3>
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(img/itens/pesca.PNG);">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                            <!-- Inserir java script para atualizar imagem da tela -->
                            <script id="rendered-js">
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                                        $('#imagePreview').hide();
                                        $('#imagePreview').fadeIn(650);
                                    };
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            $("#imageUpload").change(function() {
                                readURL(this);
                            });
                            //# sourceURL=pen.js
                            </script>
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

                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="dataDisp" name="dataDisp" class="form-control">
                                        <label for="dataDisp" class="">Item disponivel em</label>
                                    </div>
                                </div>
                            </div>

                            <!-- envia os dados -->
                            <div class="text-center text-md-left">
                                <a class="btn btn-primary"
                                    onclick="document.getElementById('contact-form').submit();">Send</a>
                            </div>
                            </form>


                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#">
                                                <img src="img/itens/furadeira.png" alt="item" title="item" />
                                            </a>
                                            <p>Furadeira</p>
                                    </div>
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#">
                                                <img src="img/itens/muffin.png" alt="item" title="item" />
                                            </a>
                                            <p>Muffin</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#">
                                                <img src="img/itens/pesca.png" alt="item" title="item" />
                                            </a>
                                            <p>Pesca</p>
                                    </div>
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#">
                                                <img src="img/itens/mergulho.png" alt="item" title="item" />
                                            </a>
                                            <p>Mergulho</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#">
                                                <img src="img/itens/guardasol.png" alt="item" title="item" />
                                            </a>
                                            <p>guarda sol</p>
                                    </div>
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#">
                                                <img src="img/itens/mala.png" alt="item" title="item" />
                                            </a>
                                            <p>Mala</p>
                                    </div>
                                </div>
                            </div>


    </main>
    <!-- Including the footer -->
    <div>
        <?php include('./Footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <br>
</body>

</html>