<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meus Itens</title>
    <link href="./css/estilo_CadItemMod.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
            <!-- Carrega os itens container col-md-4 -->
                <div class="container col-md-4 mb-5">
                        <h2 style="text-align:left;"> Outros itens </h2>
                        <?php include('./DetalheDoItem.php'); ?>
                </div>
            </div>
        </div>
</main>

<!-- Including the footer -->
                                    <div>
                                        <?php include('./Footer.php'); ?>
                                    </div>
                                    <!-- Latest compiled and minified JavaScript -->

                                    <br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>