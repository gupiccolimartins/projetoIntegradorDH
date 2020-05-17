<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil Usuario</title>
    <!-- Styles -->
    <link href="./css/estilo_feed.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- JQuery and JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
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
                <div class="menu-lateral">
                    <!-- Including panel esquerdo do usuario: UserData -->
                    <?php include('./UserData.php');?>         
                </div>
            </div>
            <!-- Panel dereito -->
            <div class="col-md-8 container">
                <!-- Seccao de items -->
                <section class="div_feed_items col-md-10">
                    <!-- Texto inicial antes dos itens do Usuario -->
                    <h2> Meus Itens </h2>
                    <!-- Incluindo o arquivo com o form para cadastro o ediçao de um item -->
                    <div class="row border-light">
                        <div class="col-md-12">
                            <div class="card  border-light">
                                <div class="card-body">
                                    <?php include('./editItemData.php');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Itens do usuario sao listadas a partir daqui -->
                <section class="div_feed_items col-md-10">
                    <!-- Vamos utilizar bootstrap cards e o estilo do feeds para ter menos mudanças -->
                    <div class="row border-light">
                        <!-- Detalhe do item publicado -->
                        <div class="col-sm-6">
                            <div class="card text-center border-light">
                                <div class="card-body mb-3">
                                    <a href="#">
                                        <img src="img/itens/furadeira.png" alt="Furadeira" title="Furadeira" />
                                    </a>
                                    <h3>Furadeira</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Detalhe do item publicado -->
                        <div class="col-sm-6">
                            <div class="card text-center border-light">
                                <div class="card-body mb-3">
                                    <a href="#">
                                        <img src="img/itens/muffin.png" alt="Forma muffin" title="Forma muffin" />
                                    </a>
                                    <h3>Forma muffin</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-light">
                        <!-- Detalhe do item publicado -->
                        <div class="col-sm-6">
                            <div class="card text-center border-light">
                                <div class="card-body mb-3">
                                    <a href="#">
                                        <img src="img/itens/guardasol.png" alt="Cadeira e Guardasol"
                                            title="Cadeira e Guardasol" />
                                    </a>
                                    <h3>Cadeira e Guardasol</h3>

                                </div>
                            </div>
                        </div>
                        <!-- Detalhe do item publicado -->
                        <div class="col-sm-6">
                            <div class="card text-center border-light">
                                <div class="card-body mb-3">
                                    <a href="#">
                                        <img src="img/itens/mala.png" alt="Mala de viagem" title="Mala de viagem" />
                                    </a>
                                    <h3>Mala de viagem</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-light">
                        <!-- Detalhe do item publicado -->
                        <div class="col-sm-6">
                            <div class="card text-center border-light">
                                <div class="card-body mb-3">
                                    <a href="#">
                                        <img src="img/itens/mergulho.png" alt="Kit mergulho" title="Kit mergulho" />
                                    </a>
                                    <h3>Cadeira e Guardasol</h3>

                                </div>
                            </div>
                        </div>
                        <!-- Detalhe do item publicado -->
                        <div class="col-sm-6">
                            <div class="card text-center border-light">
                                <div class="card-body mb-3">
                                    <a href="#">
                                        <img src="img/itens/pesca.png" alt="Kit de pesca" title="Kit de pesca" />
                                    </a>
                                    <h3>Mala de viagem</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Mais Itens Collapsiveis -->
                <section class="div_feed_items col-md-10">
                    <div class="border-light collapse_itens">
                        <p>
                            <a data-toggle="collapse" href="#collapseItems" role="button" aria-expanded="false"
                                aria-controls="collapseItems">
                                Mais Itens
                            </a>
                        </p>
                        <div class="row collapse" id="collapseItems">
                            <div class="row border-light">
                                <!-- Detalhe do item publicado -->
                                <div class="col-sm-6">
                                    <div class="card text-center border-light">
                                        <div class="card-body mb-4">
                                            <a href="#">
                                                <img src="img/itens/furadeira.png" alt="Furadeira" title="Furadeira" />
                                            </a>
                                            <h3>Furadeira</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Detalhe do item publicado -->
                                <div class="col-sm-6">
                                    <div class="card text-center border-light">
                                        <div class="card-body mb-4">
                                            <a href="#">
                                                <img src="img/itens/muffin.png" alt="Forma muffin"
                                                    title="Forma muffin" />
                                            </a>
                                            <h3>Forma muffin</h3>
                                        </div>
                                    </div>
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