function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#imagePreview").css(
        "background-image",
        "url(" + e.target.result + ")"
      );
      $("#imagePreview").hide();
      $("#imagePreview").fadeIn(650);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function () {
  readURL(this);
});


/* Função para navegar entre perfis ao clicar na imagem do mesmo.
Toda imagem de perfil clicavel deverá chamar essa função passando
como parâmetro o this.src, a função então verifica o nome da imagem
e direciona para o respectivo perfil */


function redirectToProfile(_src) {

  console.log(_src);

  if (_src.includes("Fernando")) {

      window.location.href = "PerfilUsuario.php";
  } else {

      window.location.href = "PerfilVizinho.php";
  }
}


