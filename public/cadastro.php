<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/view/css/estilo.css">
    <title>Cadastro - Vizinho online</title>
</head>

<body>
    <main>
        <div class="row">
            <header class="header">
                <nav>
                    <ul class="nav">
                        <li class="nav-item col-2 mt-1">Logo</li>
                        <li class="nav-item col-7 mt-3">Cadastre-se</li>
                        <li class="nav-item col-3"><button class="buttonHeader" data-toggle="modal" data-target="#login">Entrar</button></li>
                    </ul>
                </nav>
            </header>

</main>

<h2> Cadastro <h2>  <br />

                <div class="cadastro">
                        <div>
                            <form id="frmPost" action="">
                                <form method="get" action="envio_dados.php">
                                    <input type="text" name="nome" placeholder="Nome Completo">
                                    <hr /> <br />

                                    <input type="text" name="cpf" placeholder="CPF" onkeydown="javascript: fMasc( this, mCPF );">
                                    <hr /> <br />
                                    <input type="text" name="telefone" placeholder="Telefone" onkeydown="javascript: fMasc( this, mTel );">
                                    <hr /> <br />

                                    <input type="e-mail" name="email" placeholder="Seu e-mail">
                                    <hr /> <br />



                                    <div>
                                        <div>
                                            <input type="text" name="ap" placeholder="Apartamento">
                                         </div>
                                        <div class="campo">
                                            <input type="text" name="bloco" placeholder="Bloco">
                                            <hr /> <br />
                                        </div>
                                        <input type="text" name="interfone" placeholder="Interfone">
                                        <hr />

                                    </div>


                                    <input type="file" name="foto" placeholder="Sua foto">
                                    <hr /> <br />



                                    <input type="submit" name="Cadastrar" value="Cadastrar">


                                </form>

            </main>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
            </script>
            <script src="C:\xampp\htdocs\projetoIntegradorDH\src\js\cpf_formater.js">
            </script>

</body>

</html>