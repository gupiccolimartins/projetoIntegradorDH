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


    <main class="main">

        <div class="row mb-2">
            <div class="col-md-4">
                <!-- Including the left panel with the UserData -->
                <?php include('./UserData.php');?>
            </div>

            <div class="col-md-8">
                <div class="div_feed_items">
                    <h1>
                        O que os vizinhos estão procurando!
                    </h1>
                    <p>
                        Aqui você encontra os itens publicados recentemente
                    </p>
                    <article class="items">
                        <!-- Foto e dados do usuario -->
                        <div class="items_usuario">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="img/perfil.png" alt="perfil" title="perfil" />
                                    </a></li>
                                <li>
                                    <h3>User Nome</h3>
                                    <p>Apto 205 - Bloco A</p>
                                    <!-- Avaliacao do usuario -->

                                    <ul class="opcoes_usuario_avaliacao">
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
                                </li>
                            </ul>
                        </div>
                        <div class="items_detalhe">
                            <a class="item_detalhe_ferramenta" href="#">
                                <img src="img/ferramentas.jpeg" alt="item" title="item" />
                            </a>
                            <h2>Item Nome</h2>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It
                                was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions
                                of
                                Lorem Ipsum
                            </p>
                            <ul class="opcoes_usuario_item">
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
                    </article>
                    <article class="items">
                        <!-- Foto e dados do usuario -->
                        <div class="items_usuario">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="img/perfil.png" alt="perfil" title="perfil" />
                                    </a></li>
                                <li>
                                    <h3>User Nome</h3>
                                    <p>Apto 205 - Bloco A</p>
                                    <!-- Avaliacao do usuario -->

                                    <ul class="opcoes_usuario_avaliacao">
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
                                </li>
                            </ul>
                        </div>
                        <div class="items_detalhe">
                            <a class="item_detalhe_ferramenta" href="#">
                                <img src="img/ferramentas.jpeg" alt="item" title="item" />
                            </a>
                            <h2>Item Nome</h2>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It
                                was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions
                                of
                                Lorem Ipsum
                            </p>
                            <ul class="opcoes_usuario_item">
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
                    </article>
                    <article class="items">
                        <!-- Foto e dados do usuario -->
                        <div class="items_usuario">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="img/perfil.png" alt="perfil" title="perfil" />
                                    </a></li>
                                <li>
                                    <h3>User Nome</h3>
                                    <p>Apto 205 - Bloco A</p>
                                    <!-- Avaliacao do usuario -->

                                    <ul class="opcoes_usuario_avaliacao">
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
                                </li>
                            </ul>
                        </div>
                        <div class="items_detalhe">
                            <a class="item_detalhe_ferramenta" href="#">
                                <img src="img/ferramentas.jpeg" alt="item" title="item" />
                            </a>
                            <h2>Item Nome</h2>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It
                                was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions
                                of
                                Lorem Ipsum
                            </p>
                            <ul class="opcoes_usuario_item">
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