<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meus Itens</title>
    <link href="./css/estilo_CadItemMod.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
 <!-- Carrega meus itens. -->                
                <div class="container col-md-8">
                        <h2 style="text-align:left;"> Meus itens </h2>
                        <?php include('./MeusItensMain.php');?>
                </div>
                
            </div>
        </div>


<!-- Carrega os itens -->
                    <div class="container col-md-4">
                    <section >
                        <h2 style="text-align:left;"> Outros itens </h2>
                        <?php include('./DetalheDoItem.php'); ?>
                        </section>
                        <br>
                    </div>

</main>

<!-- Including the footer -->
                                    <div>
                                        <?php include('./Footer.php'); ?>
                                    </div>
                                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                                        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

                                    <!-- Latest compiled and minified JavaScript -->
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                                        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
                                    </script>
                                    <br>
</body>

</html>