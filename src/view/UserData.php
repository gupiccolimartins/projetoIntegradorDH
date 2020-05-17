<!-- Esta pagina vai utilizar direito o estilo CSS "user_data" quie se encontra no CSS principal. estilo_feed_include.css 
Asi funciona como exemplo de ter todos os estilos em um solo arquivo CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="./css/estilo_userData.css">

<section class="user_data">
    <!-- Obtendo o nome do usuario dinamicamente segundo a pagina -->
    <?php 
        $nomeUsuario='';
        $emailUSuario='';
        $apto='';

    $pagina= basename($_SERVER['PHP_SELF']);
    if ($pagina =="PerfilVizinho.php"){
        $usuario="Marcelo";
        $nomeUsuario= "Marcelo Silva";
        $emailUSuario="marcelo.silva@gmail.com";
        $apto="Apto 12 Bloco20";
    }
    else{
        $usuario="Fernando";
        $nomeUsuario= "Fernando Souza";
        $emailUSuario="f_souza@gmail.com";
        $aptoUsuario="Apto 84 Bloco B";
    }?>
    <h2>
        <!-- Obtendo o nome das variaves PHP -->
        <?php
    echo $nomeUsuario;
    ?>
    </h2>
    <a href="#">
        <img src="./img/avatar/<?php echo ("$usuario.png")?>" alt=" perfil" , title="perfil" class="perfil" />
    </a>

    <ul class="fa-ul">
        <li><span class="fa-li"><i class="fas fa-user" style="font-size:20px ; color: #000000"></i>
                </span<?php echo $nomeUsuario?>< /li>
        <li><span class="fa-li"><i class="fas fa-envelope"
                    style="font-size:20px ; color: #000000"></i></span><?php echo $emailUSuario?></li>
        <li><span class="fa-li"><i class="fas fa-building"
                    style="font-size:20px ; color: #000000"></i></span><?php echo $aptoUsuario?></li>
        <li><span class="fa-li"><i class="fas fa-check-square" style="font-size:20px ; color: #000000"></i></span> Mensagem</li>
        <!-- <li><span class="fa-li"><i class="fas fa-users" style="font-size:20px ; color: #000000"></i></span>3 Vizinhos -->
        </li>
        <!-- <li><span class="fa-li"><i class="fas fa-people-carry" style="font-size:20px ; color: #000000"></i></span>3 -->
            <!-- Emprestimos</li> -->
        <li><span class="fa-li"><i class="fas fa-thumbs-up"
                    style="font-size:20px ; color: #000000"></i></span>Recomendeme</li>
        <li><span class="fa-li"><i class="fas fa-heart" style="font-size:20px ; color: #000000"></i></span>0
            Recomendaçoes</li>
    </ul>
    </ul>

</section>