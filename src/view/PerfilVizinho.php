<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Perfil Vizinho</title>
    <link href="./css/estilo_feed.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<header>
    <!-- Including the header -->
    <?php include('./Header.php'); ?>
</header>
<!-- Main -->
<main class="main">
    <div class="row ">
        <!-- Panel esquerdo -->
        <div class="col-md-4">
            <!-- Including panel esquerdo do usuario: UserData -->
            <?php include('./UserData.php'); ?>
        </div>
        <!-- Panel dereito -->
        <div class="col-md-8 container">
            <!-- Seccao de items -->
            <section class="div_feed_items col-md-10">
                <!-- Texto inicial antes dos itens do Usuario -->
                <h2> Itens Marcelo </h2>
                <!-- Incluindo o arquivo de ver detalhes de um item -->
                <div class="row border-light">
                    <div class="col-md-12">
                        <div class="card  border-light">
                            <div class="card-body">
                                <?php include('./ViewItemData.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Itens do usuario sao listadas a partir daqui -->
                <!-- Vamos utilizar bootstrap cards e o estilo do feeds para ter menos mudanças -->
                <div class="row border-light">
                    <div class="col-sm-6">
                        <div class="card text-center border-light">
                            <div class="card-body mb-3">
                                <!-- Detalhe do item publicado -->
                                <a href="#">
                                    <img src="img/itens/furadeiraView.png" alt="Furadeira" title="Furadeira"/>
                                </a>
                                <h3>Furadeira</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-center border-light">
                            <div class="card-body mb-3">
                                <!-- Detalhe do item publicado -->
                                <a href="#">
                                    <img src="img/itens/muffinView.png" alt="Forma muffin" title="Forma muffin"/>
                                </a>
                                <h3>Forma muffin</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-light">
                    <div class="col-sm-6">
                        <div class="card text-center border-light">
                            <div class="card-body mb-3">
                                <!-- Detalhe do item publicado -->
                                <a href="#">
                                    <img src="img/itens/guardasolView.png" alt="Cadeira e Guardasol"
                                         title="Cadeira e Guardasol"/>
                                </a>
                                <h3>Cadeira e Guardasol</h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-center border-light">
                            <div class="card-body mb-3">
                                <!-- Detalhe do item publicado -->
                                <a href="#">
                                    <img src="img/itens/mergulhoView.png" alt="Kit de mergulho"
                                         title="Kit de mergulho"/>
                                </a>
                                <h3>Kit de mergulho</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-light">
                    <div class="col-sm-6">
                        <div class="card text-center border-lighty">
                            <div class="card-body mb-3">
                                <!-- Detalhe do item publicado -->
                                <a href="#">
                                    <img src="img/itens/pescaView.png" alt="Kit de pesca" title="Kit de pesca"/>
                                </a>
                                <h3>Kit de pesca</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-center border-light">
                            <div class="card-body mb-3">
                                <!-- Detalhe do item publicado -->
                                <a href="#">
                                    <img src="img/itens/malaView.png" alt="Mala de viagem" title="Mala de viagem"/>
                                </a>
                                <h3>Mala de viagem</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<!-- Including the footer -->
<div>
    <?php include('./Footer.php'); ?>
</div>
</body>

</html>