<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
</head>

<body>

    <!-- Including the header -->


    <?php include('./view/Header.php');?>


    <main>


        <section>
            <h1> Pagina Home</h1>

            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="./view/FeedExemploDeInclude.php">Feed Exemplo de Include</a></li>
                <li><a href="./view/FeedWithGrid.php">Feed (In Progress)</a></li>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="./usuarios.php">DB Test</a></li>

            </ul>

        </section>

    </main>

    <?php include('./view/Footer.php'); ?>

</body>

</html>