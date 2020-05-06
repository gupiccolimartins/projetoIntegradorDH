<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feed Com Flex</title>
    <link href="./css/estilo_feed_include.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <header>
        <!-- Including the header -->
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
                        <h1>
                            O que os Vizinhos estao procurando!
                        </h1>
                        <p>
                            Aqui voce encontra os items publicados recentemente
                        </p>
                        <!-- Cada item vai ficar em um article -->
                        <article class="article_items">
                            <h2>Item Nome</h2>
                            <a href="#">
                                <img src="img/ferramentas.jpeg" alt="item" title="item" />
                            </a>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has been
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
                                versions of
                                Lorem Ipsum
                            </p>
                        </article>
                        <article class="article_items">
                            <h2>Item Nome</h2>
                            <a href="#">
                                <img src="img/ferramentas.jpeg" alt="item" title="item" />
                            </a>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has been
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
                                versions of
                                Lorem Ipsum
                            </p>
                        </article>
                </div>
            </div>
        </div>
    </main>
    <!-- Including the footer -->
    <div>
        <?php include('./Footer.php'); ?>
    </div>

</body>

</html>