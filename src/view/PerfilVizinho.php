<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Perfil Vizinho</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <link href="./css/estilo_feed.css" rel="stylesheet" type="text/css"/>
        </head>

<body>
<header>
    <!-- Including the header -->
    <?php include('./Header.php'); ?>
</header>
<!-- Main -->
<main class="main">
    <div class="row ">
        <!-- Panel esquerdo -->
        <div class="col-md-4">
            <!-- Including panel esquerdo do usuario: UserData -->
            <div class="menu-lateral">
                    <!-- Including panel esquerdo do usuario: UserData -->
                    <?php include('./UserData.php');?>         
            </div>        
         </div>
        <!-- Panel dereito -->
        <div class="col-md-8 container">
            <!-- Seccao de items -->
            <section class="div_feed_items col-md-10">
                <!-- Texto inicial antes dos itens do Usuario -->
                <h2> Itens Marcelo </h2>
                <!-- Incluindo o arquivo de ver detalhes de um item -->
                

                <!-- Itens do usuario sao listadas a partir daqui -->
                <!-- Vamos utilizar bootstrap cards e o estilo do feeds para ter menos mudanças -->
                <div class="row">
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#" class="card-link" data-toggle="modal" data-target="#modaldetalhe">
                                                <img src="img/itens/furadeira.png" alt="item" title="item" />
                                            </a>
                                            <p>Furadeira</p>
                                    </div>
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#" class="card-link" data-toggle="modal" data-target="#modaldetalhe">
                                                <img src="img/itens/muffin.png" alt="item" title="item" />
                                            </a>
                                            <p>Muffin</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#"class="card-link" data-toggle="modal" data-target="#modaldetalhe">
                                                <img src="img/itens/pesca.png" alt="item" title="item" />
                                            </a>
                                            <p>Pesca</p>
                                    </div>
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#" class="card-link" data-toggle="modal" data-target="#modaldetalhe">
                                                <img src="img/itens/mergulho.png" alt="item" title="item" />
                                            </a>
                                            <p>Mergulho</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#"class="card-link" data-toggle="modal" data-target="#modaldetalhe">
                                                <img src="img/itens/guardasol.png" alt="item" title="item" />
                                            </a>
                                            <p>guarda sol</p>
                                    </div>
                                    <div class="col">
                                        <article class="article_items">
                                            <a href="#" class="card-link" data-toggle="modal" data-target="#modaldetalhe">
                                                <img src="img/itens/mala.png" alt="item" title="item" />
                                            </a>
                                            <p>Mala</p>
                                    </div>
                                </div>
                    <!-- modal -->
                    <div class="modal fade" id="modaldetalhe" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-light">
                                    <h5 class="modal-title">item</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                </div>
                                <div class="row border-light">
                                <div class="col-md-12">
                                     <div class="">
                                        <div class="">
                                            <?php include('./ViewItemData.php'); ?>
                                        </div>
                                    </div>
                                </div>
                             </div>
                             <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Eu Quero</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>

                </div>    
            </div>                        

            </section>
        </div>
    </div>

           

</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
<!-- Including the footer -->
<div>
    <?php include('./Footer.php'); ?>
</div>
</body>

</html>