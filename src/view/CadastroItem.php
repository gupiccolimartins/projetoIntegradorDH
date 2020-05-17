<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Itens</title>
<<<<<<< HEAD
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="./css/estilo_CadItemMod.css" rel="stylesheet" type="text/css" />
=======
    <link href="./css/estilo_feed.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

>>>>>>> e5978b72d64d70cd4a709e186c7f8e8b21022df1
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
                <!-- Carrega form cadastro dos itens. -->
                <div class="container col-md-8">
<<<<<<< HEAD
                    <!-- Section dos feeds -->
                    <!-- Aqui vem meu codigo - tem que utilizar bootstrap -->
                    <section class="div_feed_items">
                        <h2> Comece a compartilhar! </h2>
                        <p>Clique na imagem para iniciar</p>
                        
                        <div class="container">
                            <div class="col-md-9 ml-5">
                                <form action="PHP/file.php" mothod="POST" enctype="multipart/form-data">
                                    
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(./img/itens/add.png);">
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
                                <div class="col-md-12 ">
                            
                                <div class="input-container">
                                        <input type="text" id="name" name="name" class="input" placeholder="Nome do item">
                                        <!-- <label for="name" class="label">Nome do item</label> -->
                        
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <textarea type="text" id="message" name="message" rows="6" placeholder="Descrição do item"
                                            class="form-control sm-textarea"></textarea>
                                        <!-- <label for="message">Insira a descrição do item</label> -->
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                <div class="input-container">
                                        <input type="text" id="name" name="name" class="input" placeholder="Item disponivel em">
                                        <!-- <label for="dataDisp" class="">Item disponivel em</label> -->
                                    </div>
                                </div>
                            </div>
                            <BR>
                            <!-- envia os dados -->
                            <div class="text-center text-md-left">
                                <a class="btn btn-secondary text-white"
                                    onclick="document.getElementById('contact-form').submit();">Enviar</a>
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
=======
                    <h2 style="text-align:left;"> Cadastro de itens </h2>
                    <?php include('./itemData.php'); ?>
                </div>
>>>>>>> e5978b72d64d70cd4a709e186c7f8e8b21022df1

                <!-- carrega detalhe dos itens -->
                <section>
                    <?php include('./DetalheDoItem.php'); ?>
                </section>
            </div>
        </div>

    </main>
    <!-- Including the footer -->
    <div>
        <?php include('./Footer.php'); ?>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>