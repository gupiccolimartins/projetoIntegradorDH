<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="./view/css/estilo_header.css" rel="stylesheet" type="text/css" />
    <link href="./view/css/estilo_footer.css" rel="stylesheet" type="text/css" />
    <!-- Codigo para o estilo da pagina index.php -->
    <style type="text/css">
    .principal {
        background-image: url('./view/img/banner.png');
        clear: both;
        background-size: 100%;
        min-height: 400px;
        padding: 80px 0 0 0;
    }

    .container {
        width: 960px;
        margin: 0 auto;
    }

    .efeito {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 80px 0 80px 0;
    }

    header .section_header nav ul li:hover {
        background-color: blue;
        color: white;
    }
    </style>
</head>

<body>
    <header>
        <!-- Including the header -->
        <?php include('./view/Header.php'); ?>
    </header>
    <!-- Main -->
    <main>
        <section>
            <h1> Pagina Home</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="./view/Feed.php">Feed</a></li>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </section>
    </main>

    <div class="principal">
        <div class="efeito">
            <div class="container">
                <h1>Bem-vindo a vizinho online</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper rhoncus imperdiet.
                    Etiam
                </p>

            </div>
        </div>
    </div>
    <!-- Including the footer -->
    <?php include('./view/Footer.php'); ?>
</body>

</html>