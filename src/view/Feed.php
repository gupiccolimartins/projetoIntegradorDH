<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feed</title>
    <link href="./css/estilo_feed.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <!-- Including the header -->
        <?php include('./Header.php'); ?>
    </header>


    <main class="main">

        <section>
            <!-- Including the left panel with the UserData -->
            <?php include('./UserData.php');?></section>
        <section class="items">
            <header>
                <h1>
                    O que os Vizinhos estao procurando!
                </h1>
                <p>
                    Aqui voce encontra os items publicados recentemente
                </p>
            </header>

            <article>
                <a href="#">
                    <img src="img/ferramentas.jpeg" alt="item" title="item" />
                </a>
                <h2>Item Nome</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                </p>
            </article>
            <article>
                <a href="#">
                    <img src="img/ferramentas.jpeg" alt="item" title="item" />
                </a>
                <h2>Item Nome</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                </p>
            </article>
            <article>
                <a href="#">
                    <img src="img/ferramentas.jpeg" alt="item" title="item" />
                </a>
                <h2>Item Nome</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                </p>
            </article>
            <article>
                <a href="#">
                    <img src="img/ferramentas.jpeg" alt="item" title="item" />
                </a>
                <h2>Item Nome</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                </p>
            </article>

            <article>
                <a href="#">
                    <img src="img/ferramentas.jpeg" alt="item" title="item" />
                </a>
                <h2>Item Nome</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                </p>
            </article>
            <article>
                <a href="#">
                    <img src="img/ferramentas.jpeg" alt="item" title="item" />
                </a>
                <h2>Item Nome</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                </p>
            </article>
        </section>
    </main>

    <!-- Including the footer -->
    <?php include('./Footer.php'); ?>

</body>

</html>