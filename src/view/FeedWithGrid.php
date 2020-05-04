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
                        O que os Vizinhos estao procurando!
                    </h1>
                    <p>
                        Aqui voce encontra os items publicados recentemente
                    </p>
                    <article class="items">
                        <h2>Item Nome</h2>
                        <a href="#">
                            <img src="img/ferramentas.jpeg" alt="item" title="item" />
                        </a>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                    </article>
                    <article class="items">
                        <h2>Item Nome</h2>
                        <a href="#">
                            <img src="img/ferramentas.jpeg" alt="item" title="item" />
                        </a>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                    </article>
                    <article class="items">
                        <h2>Item Nome</h2>
                        <a href="#">
                            <img src="img/ferramentas.jpeg" alt="item" title="item" />
                        </a>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                    </article>
                    <article class="items">
                        <h2>Item Nome</h2>
                        <a href="#">
                            <img src="img/ferramentas.jpeg" alt="item" title="item" />
                        </a>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                    </article>
                    <article class="items">
                        <h2>Item Nome</h2>
                        <a href="#">
                            <img src="img/ferramentas.jpeg" alt="item" title="item" />
                        </a>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
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