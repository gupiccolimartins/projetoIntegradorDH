<?php
var_dump($_FILES);


$extensoesValidas = ['image/jpeg','imagem/gif','imagem/ico'];

if($_FILES['imagem']['error']==0){
    if(array_search($_FILES['imagem']['type'],$extensoesValidas)=== false){
        echo "extensão invalida";
        exit;
    } 
    echo "carregou";
    if(move_uploaded_file($_FILES['imagem']['tmp_name'],'img/'.$_FILES['imagem']['name'])){
        echo "arquvio".$_FILES['imagem']['name']." "."Carregado";
    }else{
       echo "deu ruim";
    }
}else{
   echo "não carregou";
}
?> 

