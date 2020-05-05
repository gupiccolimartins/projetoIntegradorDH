<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feed Com Div Colunas</title>
    <link href="./css/estilo_feed_with_grid.css" rel="stylesheet" type="text/css" />
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
            <div class="col-md-4 container">
                <!-- Including the left panel with the UserData -->
                <?php include('./UserData.php');?>
            </div>
            <div class="col-md-8 container">
                <article class="div_feed_items">
                    <h2> O que os vizinhos estão procurando!</h2>
                    <p>Aqui você encontra os itens publicados recentemente</p>
                    <div class="card  text-center">
                        <div class="card-body">
                            <!-- Foto e dados do usuario -->
                            <div class="info_usuario container row">
                                <div class="col-md-4 perfil">
                                    <a href="#">
                                        <img src="img/perfil.png" alt="perfil" title="perfil" />
                                    </a>
                                </div>
                                <div class=" col-md-6 opcoes_usuario">
                                    <h3>Marcelo</h3>
                                    <p>Apto 205 - Bloco A</p>
                                    <div class="opcoes_usuario_avaliacao">
                                        <ul>
                                            <li> <a href="#">
                                                    <img src="img/star1.svg" alt="avaliacao" title="avaliacao" />
                                                </a>
                                                <p>4.5</p>
                                            </li>
                                            <li> <a href="#">
                                                    <img src="img/hands.png" alt="publicacoes" title="publicacoes" />
                                                </a>
                                                <p>25</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="detalhe_item">
                                <a href="#">
                                    <img src="img/ferramentas.jpeg" alt="ferramentas" title="ferramentas" />
                                </a>
                                <h5>Alguem tem uma mala parecida com essa para emprestimo!</h5>
                                <div class="acoes_detalhe_item">
                                    <ul>
                                        <li> <a href="#">
                                                <img src="img/favorite1.svg" alt="favorito" title="favorito" />
                                            </a></li>
                                        <li> <a href="#">
                                                <img src="img/chat.svg" alt="message" title="message" />
                                            </a></li>
                                        <li> <a href="#">
                                                <img src="img/share.svg" alt="compartilhar" title="compartilhar" />
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </article>

            </div>
        </div>
    </main>
    <!-- Including the footer -->
    <div>
        <?php include('./Footer.php'); ?>
    </div>

</body>

</html>