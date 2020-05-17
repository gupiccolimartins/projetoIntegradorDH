<meta charset="UTF-8" />
<link href="./css/estilo_feed.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<!-- <div class="container col-md-8"> -->
<!-- Section dos feeds -->
<!-- Aqui vem meu codigo - tem que utilizar bootstrap -->
<section class="div_detalhe_view_item">
    <div class="container">
        <div class="col-md-10 mb-md-0 mb-5">
            <div class="container img_item">
                <img src="img/itens/furadeiraView.png" alt="Detalhe Item" title="Detalhe Item" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="md-form mb-0">
                    <label for="name" class="">Nome</label>
                    <input type="text" id="name" name="name" value="Furadeira" class="form-control" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="md-form mb-0">
                    <label for="message">Descrição</label>
                    <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"
                        disabled>FURADEIRA ELÉTRICA DE IMPACTO 950W. Ferramenta profissional indicada para operações de furação sem impacto em madeira, metal, plástico e cerâmica, e furação com impacto em tijolos, concreto, pedras e alvenarias. Também utilizado para operações de aperto e desaperto de parafusos quando utilizada em baixa velocidade.</textarea>
                </div>
            </div>
        </div>

        <!-- Disponibilidade do item -->
        <div class="col-md-12" style="text-align:left;">
            <div id="calendar_div" class="col-md-2">
                <label for="disponibilidade">Disponibilidade</label>
            </div>
            <!-- Date Picker -->
            <div class="col-md-10 mb-4;">
                <img src="img/icons/calendar.png" alt="Selecionar data" title="Selecionar data" />
                <label for="meeting">Inicio : </label><input id="meetingInicio" type="date" value="2020-05-20"
                    disabled />
                <label for="meeting">Fim : </label><input id="meetingFim" type="date" value="2020-05-30" disabled />
            </div>
        </div>
        </form>
    </div>
</section>