<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Itens</title>
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
                <div class="container col-md-8">
                    <!-- Section dos feeds -->
                    <!-- Aqui vem meu codigo - tem que utilizar bootstrap -->
                    <section class="div_feed_items">
                        <h2 style="text-align:left;"> Meus itens </h2>
                        <div class="container">
                            <div class="col-md-9 mb-md-0 mb-5">
                                <div class="container">
                                    <div class="row">
                                    <h3 style="text-align:left;"> Furadeira </h3>
                                        <div class="col-12">
                                                <article class="article_items_big"> <a><img src="img/itens/furadeira.png" alt="item" title="item"/></a>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit id accusantium porro vel minus laudantium tempore eaque! Nesciunt iusto, velit debitis neque possimus unde, libero ut obcaecati mollitia molestias deleniti.
                                        </p>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit id accusantium porro vel minus laudantium tempore eaque! Nesciunt iusto, velit debitis neque possimus unde, libero ut obcaecati mollitia molestias deleniti.
                                        </p> <br><br><br>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="container col-md-8 mb-5" style="text-align:left;">
                    <!-- <section class="div_feed_items" style="text-align:left;"> -->
                    <h3><br> Disponibilidade</h3> 
                        <!-- <div class="container">
                            <div class="col-md-8 mb-md-0 mb-5">
                                <div class="container"> -->
                                    <div class="row" >
                                        <div class="col-10" style="text-align:left; border-bottom:1px solid #ccc;">
                                        <h4>dom a seg das: 9:00 as 18:00 </h4>
                                        </div>
                                            <div class="col-md-10 mb-6; text-right text-md-right">
                                            <br>
                                                <a button type="button" class="btn btn-outline-secondary btn-lg">Eu Quero</button></a>
                                            </div>
                                    </div>
                    </div>

<section class="div_feed_items">
    <h2 style="text-align:left;"> Outros itens </h2>
                            <?php include('./DetalheDoItem.php'); ?>
</section>
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