
 <section>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <stylesheet>
  <link href="css/estilo_header.css" rel="stylesheet" type="text/css" />
    </stylesheet>

<div class="row d-flex justify-content-center aling-itens-center">
    <form action="PHP/file.php" mothod = "POST" enctype="multipart/form-data">
    <!-- Carrega a imagem -->
      <div class="form-group">
        <label for="imagem">insira usa imagem</label>
         <input type="file" class="form-control" name="imagem" value="">
        </div>
        <!-- Insere os comentários -->
    <div class= "form-group">
        <label for= "comentItiem"> nome completo </label>
        <input type="text" class= "form-control" id= "CommentItem" placeholder="detalhe do item">
        </div>

        
   </form>
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</section>