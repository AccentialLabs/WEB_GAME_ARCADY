<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type='text/javascript'>
<?php
//$php_array = array('abc','def','ghi');
$php_array = $objetos;
$js_array = json_encode($php_array);
echo "var javascript_array = " . $js_array . "; \n";
?>


<?php
$php_array_categorias = $tiposobjeto;
$js_array_tipocategoria = json_encode($php_array_categorias);
echo "var js_tipocategoria_array = " . $js_array_tipocategoria . "; \n";

if (!empty($this->session->userdata('atualJogoCad_JOGO'))) {
    $jogoCADASTRADO = $this->session->userdata('atualJogoCad_JOGO');
}
?>


</script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
<link rel="stylesheet" href="//d2d3qesrx8xj6s.cloudfront.net/dist/bootsnipp.min.css?ver=7d23ff901039aef6293954d33d23c066">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://bootsnipp.com/dist/scripts.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<link href="../../assets/css/tela1.css" rel="stylesheet"/> 
<script type="text/javascript" src="../../assets/js/CadastroJogo.js"></script>
<script type="text/javascript" src="../../assets/js/cadastro-jogo/infos.js"></script>
<!--        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>-->
<script type="text/javascript" src="http://anthonyterrien.com/demo/knob/jquery.knob.min.js"></script>
<script src="../../assets/js/views/cadastrarPrograma.js"></script> 

<script>


    function removeDropped(id) {

        $("#" + id).fadeOut(200);
        $("#" + id).remove();

    }

    $(function() {

        var contadorDroppedmissao = 0;
        var contadorDroppeddesafio = 0;
        var contadorDroppedprograma = 0;
        var contadorDroppedacao = 0;

        var atualId = 0;
        var lastCloneID = '';

        var dinamiccontentinteracoes = $(".dinamic-content-interacoes");
        dinamiccontentinteracoes.on('click', '.ui-draggable-clone', function(e) {
            // alert('click from ' + $(this).text());
            $(this).addClass("border-red");
        });

        $(".draggable-itens").draggable({
            connectToSortable: ".dinamic-content-interacoes",
            helper: 'clone',
            stop: function(event, ui) {
                // $(this).append($(ui.draggable).clone());

                var atividade = event.target.id;
                //alert('#' + atividade + '-modal');
                // console.log(atividade);
                $('#' + atividade + '-modal').modal('toggle');
                $('#' + atividade + '-modal').modal('show');


                if (atividade === 'missao') {
                    contadorDroppedmissao++;
                    atualId = "missao-" + contadorDroppedmissao;
                } else if (atividade === 'acao') {
                    contadorDroppedacao++;
                    atualId = "acao-" + contadorDroppedacao;
                } else if (atividade === 'programa') {
                    contadorDroppedprograma++;
                    atualId = "programa-" + contadorDroppedprograma;
                } else if (atividade === 'desafio') {
                    contadorDroppeddesafio++;
                    atualId = "desafio-" + contadorDroppeddesafio;
                }
            }
        });

        $(".dinamic-content-interacoes").sortable({
            connectWith: ".dinamic-content-interacoes",
            receive: function(event, ui) {

                $(newItem).addClass("cloned-item");
                $(newItem).attr("id", atualId);
                $(newItem).append("<span> </span><h4 id='TITULO-" + atualId + "'>Nova interação</h4> <span class='espaco'> | </span><small><span id='DATA_ABERTURA-" + atualId + "' class='espaco'>00/00/0000</span></small> - <small><span id='DATA_FECHAMENTO-" + atualId + "' class='espaco'>00/00/0000</span></small> <span class='espaco'> | </span><span id='PONTOS-" + atualId + "' class='espaco'>0</span> pontos <div class='pull-right trash'><span class='glyphicon glyphicon-trash' onclick='removeDropped(\"" + atualId + "\")'></span></div>");

                lastCloneID = atualId;
            },
            beforeStop: function(event, ui) {
                newItem = ui.item;
            }
        });

        $(".cloned-item").draggable();

        $('#trash').droppable({
            over: function(event, ui) {
                ui.draggable.remove();
            }
        });

        /**
         * 
         */
        $(".titulo-do-item-cadastrado").keyup(function() {
            $("#clonedItemTitle").val($(this).val());
            console.log(atualId);
            console.log(lastCloneID);
            $("#TITULO-" + lastCloneID).html($(this).val());
        });

        $(".data-abertura-do-item-cadastrado").keyup(function() {
            $("#DATA_ABERTURA-" + lastCloneID).html($(this).val());
        });

        $(".data-fim-do-item-cadastrado").keyup(function() {
            $("#DATA_FECHAMENTO-" + lastCloneID).html($(this).val());
        });

        $(".pontos-do-item-cadastrado").keyup(function() {
            $("#PONTOS-" + lastCloneID).html($(this).val());
        });

        /**
         * Apaga o último item caso o modal seja fechado antes do cadastro ser completado
         */
        $(".close").click(function() {
            console.log(atualId);
            $("#" + atualId).remove();
        });
    });


</script>

<style>

    .espaco{
        margin-left: 5px;
        margin-right: 5px;
    }

    .trash{
        position: absolute;
        right: 20px;

        font-size: 1em !important;
    }

    .trash .glyphicon{
        font-size: 1em !important;
        top: -23 !important;
    }

    .dinamic-content-interacoes .glyphicon {
        font-size: 2em;
        border: 1px solid #999;
        border-radius: 3px;
        padding: 5px;
        float: left;
    }

    .cloned-item{
        width: 100% !important;
        display: flex;
        align-items: center;
    }

    .cloned-item h4{
        margin-left: 10px;
    }

    .ui-draggable-clone {
        border: 1px dotted #000;
        padding: 6px;
        background: #fff;
        font-size: 1.2em;
    }

    .tabs-left, .tabs-right {
        border-bottom: none;
        //padding-top: 2px;
    }
    .tabs-left {
        border-right: 1px solid #ddd;
    }
    .tabs-right {
        border-left: 1px solid #ddd;
    }
    .tabs-left>li, .tabs-right>li {
        float: none;
        //margin-bottom: 2px;
    }
    .tabs-left>li {
        margin-right: -1px;
    }
    .tabs-right>li {
        margin-left: -1px;
    }
    .tabs-left>li.active>a,
    .tabs-left>li.active>a:hover,
    .tabs-left>li.active>a:focus {
        border-bottom-color: #ddd;
        border-right-color: transparent;
    }

    .tabs-right>li.active>a,
    .tabs-right>li.active>a:hover,
    .tabs-right>li.active>a:focus {
        border-bottom: 1px solid #ddd;
        border-left-color: transparent;
    }
    .tabs-left>li>a {
        border-radius: 4px 0 0 4px;
        margin-right: 0;
        display:block;
    }
    .tabs-right>li>a {
        border-radius: 0 4px 4px 0;
        margin-right: 0;
    }
    .vertical-text {
        margin-top:50px;
        border: none;
        position: relative;
    }
    .vertical-text>li {
        height: 20px;
        width: 120px;
        margin-bottom: 100px;
    }
    .vertical-text>li>a {
        border-bottom: 1px solid #ddd;
        border-right-color: transparent;
        text-align: center;
        border-radius: 4px 4px 0px 0px;
    }
    .vertical-text>li.active>a,
    .vertical-text>li.active>a:hover,
    .vertical-text>li.active>a:focus {
        border-bottom-color: transparent;
        border-right-color: #ddd;
        border-left-color: #ddd;
    }
    .vertical-text.tabs-left {
        left: -50px;
    }
    .vertical-text.tabs-right {
        right: -50px;
    }
    .vertical-text.tabs-right>li {
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .vertical-text.tabs-left>li {
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    body{
        margin-top: 0px !important;
    }

    .row{
        margin-right: 0px;
    }

    .col-lateral-menu{
        padding-right: 0px;
        padding-left: 0px;
    }

    .nav-tabs>li>a{
        border-radius: 0px !important;
    }

    .menu-tab{
        padding: 20px !important;
    }

    a{
        color: #666;
    }

    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
        color: #444;
    }

    a span{
        font-size: 18px;
    }

    a {
        border-color: #ddd #ddd #ddd #ddd !important;
    }

    .tab-content{
        padding-top: 15px;
    }

    legend.scheduler-border {
        font-size: 0.9em !important;
        font-weight: normal !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;

    }

    fieldset.scheduler-border {
        background: transparent !important;
        padding: 0 1.4em 1.4em 1.4em !important;
    }

    .btn-default{
        background-image: none !important;
    }

    .game-icon{
        opacity: 0.5;
    }

    .count-jogadores{
        margin-bottom: 0px !important;
        margin-top: 0px !important;
    }

    .dashboard-icon-list{
        border: 1px solid #888;
        padding: 5px;
        color: #888;
        border-radius: 4px;
        font-size: 1.2em;
        margin-right: 7px;
    }

    .dashboard-icon-list-div{
        margin-top: 7px;
        color: #333;
    }

    .calendar-icon{
        font-size: 2em;
        opacity: 0.6;
    }

    .box-content-dash{
        margin-top: 15%;
    }

    .coluna-box-dash{
        border-left: 1px solid #999;
    }

    .chart-graphic-icon{
        opacity: 0.6;
    }

    .coluna-box-dash-geral{
        // border-bottom: 1px solid 
        //   #999;
    }

    /*            [data-pie-id] li:nth-child(0) {
                    color: blue;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id] li:nth-child(1) {
                    color: #4d00ff;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id] li:nth-child(2) {
                    color: #9900ff;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id] li:nth-child(3) {
                    color: #e500ff;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id] li:nth-child(4) {
                    color: #ff00cc;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id] li:nth-child(5) {
                    color: #ff0080;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id] li:nth-child(6) {
                    color: #ff0033;
                }
    
                 line 26, ../sass/pizza.scss 
                ul[data-pie-id] {
                    list-style: none;
                    padding: 10px;
                }
    
    
                [data-pie-id='my-cool-chart'] li:nth-child(0) {
                    color: #d84200;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id='my-cool-chart'] li:nth-child(1) {
                    color: #fc4d00;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id='my-cool-chart'] li:nth-child(2) {
                    color: #ff6420;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id='my-cool-chart'] li:nth-child(3) {
                    color: #ff7d44;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id='my-cool-chart'] li:nth-child(4) {
                    color: #ff9668;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id='my-cool-chart'] li:nth-child(5) {
                    color: #ffaf8b;
                }
    
                 line 20, ../sass/pizza.scss 
                [data-pie-id='my-cool-chart'] li:nth-child(6) {
                    color: #ffc8af;
                }*/

    .graphic-content-div{
        line-height: -15px;
        margin-top: 3px;
    }

    .graphic-content-text-ponto{
        position: absolute;
        bottom: 60;
        left: 75px;

    }

    .graphic-content-text-tempo{
        position: absolute;
        bottom: 115;
        left: 75px;
    }

    .graphic-content-text-percentage{
        position: absolute;
        bottom: 15;
        left: 75px;
    }

    .coluna-right-box-dash-geral{
        font-size: 2em;
        text-align: center;
        //border-right: 1px solid #999;
        //border-bottom: 1px solid #999;
    }

    .icons-from-top{
        margin-top: 30px;

    }

    .icons-from-top-last{
        margin-bottom: 20px;
        margin-top: 42px;
    }

    .coluna-box-dash-down{
        border-top: 1px solid #999;
        padding: 10px;
        padding-top: 5px;
    }

    .game-body{
        padding: 10px;
        border: 1px solid #999;
    }

    .fieldset {
        border: 1px groove #999;
        border-top: none;
        padding: 0.5em;
        margin: 1em 2px;
    }
    .fieldset > h1 {
        font-size: 1em;
        margin: -1em -0.5em 0;
    }   
    .fieldset > h1 > span {
        float: left;
    }
    .fieldset > h1:before {
        border-top: 1px groove #999;
        content: ' ';
        float: left;
        margin: 0.5em 2px 0 -1px;
        width: 0.75em;
    }
    .fieldset > h1:after {
        border-top: 1px groove #999;
        content: ' ';
        display: block;
        height: 1.5em;
        left: 2px;
        margin: 0 1px 0 0;
        overflow: hidden;
        position: relative;
        top: 0.5em;
    }



    // ~ CADASTRO ~



</style>

<style>

    .play-premio, .pause-premio, .trash-premio{
        cursor: pointer;
    }

    .play-premio:hover, .pause-premio:hover, .trash-premio:hover{
        opacity: 0.6;
    }

    .loader {
        border: 16px solid #333; /* Light grey */
        border-top: 16px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: spin 2s linear infinite;
        position: absolute;
        z-index: 9999999999;
        top: 30%;
        left: 45%;
        display: none;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .error-insert-game{
        display: none;
    }

    .form-row{
        margin-top: 15px;
    }

    .jogo-hr{
        border-top: 1px solid #999 !important;
    }

    .floating-div{
        border: 1px solid #999;
        padding: 10px;
        padding-bottom: 20px;
        border-radius: 2px;
        box-shadow: 5px 5px 3px #ddd;
        background: #fff;
    }

    .floating-div button{
        margin-top: 5px;
        cursor: move !important;
    }

    .floating-div hr{
        margin: 10px !important;
        border-top: 1px solid #999;
        padding: 0px !important;
        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    .dinamic-content-interacoes{
        min-height: 100px;
        border: 2px dashed #ddd;
        padding: 10px !important;
        border-radius: 8px;
        padding-bottom: 30px !important;
        background: #fff;
    }

    .draggable-itens{
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 2px;
        margin-top: 5px;
        background: #eeeeee;
    }

    .z-high-index{
        z-index: 99999999;
    }

    .vigencia-primeira-linha{
        margin-bottom: 5px;
    }

    .input-xs{
        padding: 2px 5px;
        font-size: 10px;
    }

    .table-hover th, td{
        font-size: 12px;
    }

    .contador-input{
        width: 50px;
    }

    .form-btn{
        margin-right: 10px;
        font-size: 12px !important;
    }

    .form-btn-sucess{
        background: #419641 !important;
        border: 0px !important;
    }

    .form-btn-danger{
        background: #d9534f !important;
        border: 0px !important;
    }

    .draggable-trash{
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 2px;
        margin-top: 5px;
        background: #eeeeee;
    }



</style>

<input type="text" id="clonedItemTitle" class="hide"/>
<div class="row" style="min-height:300px;">
    <div  class="col-md-9 tab-content">
        <div class="loader" id="loader"></div>
        <div class="col-xs-12">
            <div class="col-xs-12">
                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- 
                        INFOS DO JOGO
                    -->
                    <div class="tab-pane active" id="infos">

                        <h3>Novo Jogo<br />
                            <small>Os jogos são totalmente independentes, todos os elementos necessários devem ser criados dentro do mesmo</small></h3>
                        <!-- nome -->
                        <div class="alert alert-danger error-insert-game" role="alert">Houve algum erro! Verifique os dados e tente novamente.</div>
                        <br/>
                        <div class="col-md-12 form-row">
                            <div class="col-md-2">Nome</div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name='nome' id='nome' value="<?php
                                if (!empty($jogoCADASTRADO['nome'])) {
                                    echo $jogoCADASTRADO['nome'];
                                }
                                ?>"/>
                            </div>
                        </div>

                        <div class="col-md-12 form-row">
                            <div class="col-md-2">Responsável</div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name='usuario_responsavel_nome' id='usuario_responsavel_nome' value="<?php
                                if (!empty($jogoCADASTRADO['usuario_responsavel_nome'])) {
                                    echo $jogoCADASTRADO['usuario_responsavel_nome'];
                                }
                                ?>"/>
                            </div>
                        </div>

                        <div class="col-md-12 form-row">
                            <div class="col-md-2">Orientações para os Jogadores</div>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="6" name='orientacoes' id='orientacoes' ><?php
                                    if (!empty($jogoCADASTRADO['orientacoes'])) {
                                        echo $jogoCADASTRADO['orientacoes'];
                                    }
                                    ?></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 form-row">
                            <div class="col-md-2">Regras do Jogo</div>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="6" id='regras' name='regras' ><?php
                                    if (!empty($jogoCADASTRADO['regras'])) {
                                        echo $jogoCADASTRADO['regras'];
                                    }
                                    ?></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 form-row">
                            <div class="col-md-2">Logotipo</div>
                            <div class="col-md-10">
                                <a>clique aqui para selecionar a imagem</a>
                            </div>
                        </div>

                        <div class="col-md-12 form-row">
                            <div class="col-md-2">Recursos Suporte</div>
                            <div class="col-md-10">
                                <table class="table table-striped">
                                    <tr>
                                        <td>
                                            <small>Video de Apresentação</small>
                                        </td>
                                        <td>
                                            <small>chamada-jogo.mp4</small>
                                        </td>
                                        <td class="text-center">
                                            <small>
                                                <span class="glyphicon glyphicon-ban-circle"></span>
                                            </small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <br/>
                        <div class='text-right'>
                            <button class='btn btn-default' id='infos-proximo-passo'>Próximo passo</button>
                        </div>
                    </div>


                    <!-- -->


                    <!-- JOGADORES -->
                    <div class="tab-pane" id="jogadores">
                        <h3>Jogadores <br/><small>(Lista completa de todos os jogadores cadastrados no sistema)</small></h3>

                        <br/>

                        <table class="table table-striped"  id="exampleXPTO">
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Cargo</th>
                                <th>Departamento</th>
                                <th>Unidade</th>
                                <th></th>
                            </tr>

                            <?php foreach ($todosJogadores as $jog) { ?>
                                <tr>
                                    <td><?php echo $jog['nome']; ?></td>
                                    <td><?php echo $jog['email']; ?></td>
                                    <td><?php echo $jog['telefone']; ?></td>
                                    <td><?php echo $jog['cargo']; ?></td>
                                    <td><?php echo $jog['departamento']; ?></td>
                                    <td><?php echo $jog['unidade']; ?></td>
                                    <td><input type='checkbox' value='<?php echo $jog['id']; ?>' class='jogadores-selecionados' /></td>
                                </tr>
                            <?php } ?>

                        </table>
                        <br/>               

                        <div class='text-right'>
                            <button class='btn btn-default' id='jogadores-proximo-passo' >Proximo Passo</button>
                        </div>
                    </div>


                    <!--
                        INTERAÇÕES
                    -->
                    <div class="tab-pane" id="interacoes">

                        <!-- HEADER -->
                        <div class="header-interacoes">
                            <div class="col-md-4">
                                <h3 id="nomeJogo_H3"><?php echo $this->session->userdata('atualJogoCad_NOME'); ?></h3>
                            </div> 

                            <div class="col-md-4 text-center">
                                <br/>
                                <span class="glyphicon glyphicon-calendar"></span> <span id="span_DataInicial">00/00/0000</span> - <span id="span_DataFinal">00/00/0000</span>
                            </div>

                            <div class="col-md-4">
                                <br/>
                                <div class="text-right"><span id="span_Pontos">0</span> pontos</div>
                            </div>
                        </div><br/><br/>
                        <hr class="jogo-hr"/>

                        <!-- INTERACOES CONTENT -->
                        <div>
                            <div class="col-md-11 dinamic-content-interacoes" id='recebe-draggable'> </div>

                            <div class="col-md-1">
                                <div class="floating-div text-center ui-widget-content" id="draggable">
                                    <div class="draggable-itens" id="acao"> <span class="glyphicon glyphicon-flash"></span> </div>
                                    <div class="draggable-itens" id="missao"><span class="glyphicon glyphicon-briefcase"></span></div>
                                    <div class="draggable-itens" id="programa"><span class="glyphicon glyphicon-folder-close"></span></div>
                                    <div class="draggable-itens" id="desafio"><span class="glyphicon glyphicon-fire"></span></div>
                                    <hr />
                                    <div class="draggable-itens" id="reconhecimento"><span class="glyphicon glyphicon-asterisk"></span></div>
                                    <div class="draggable-itens busca-premios" id="premio"><span class="glyphicon glyphicon-gift"></span></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="reconhecimentos">Settings Tab.</div>

                    <div class="tab-pane" id="premios">
                        <h3>Prêmios <br/><small>(Lista completa de todos os prêmios cadastrados no jogo atual)</small></h3>
                        <br/>
                        <button class="btn btn-default pull-right" id="btnCadastrarPremio">Novo Prêmio</button><br /><br/>
                        <table class="table table-striped"  id="tabelaPREMIOS">
                            <tr>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Descrição</th>
                                <th></th>
                                <th></th>
                            </tr>

                            <?php
                            if (!empty($premios_jogo)) {
                                foreach ($premios_jogo as $premio) {
                                    if ($premio['premioStatus'] != 2) {
                                        ?>
                                        <tr id="tr-<?php echo $premio['premioId']; ?>">
                                            <td><?php echo $premio['nome']; ?></td>
                                            <td><?php echo $premio['tipoDescricao']; ?></td>
                                            <td><?php echo $premio['premioDescricao']; ?></td>
                                            <td>
                                                <?php if ($premio['premioStatus'] == 0) { ?>
                                                    <span class="glyphicon glyphicon-play play-premio" id="<?php echo $premio['premioId']; ?>"></span>
                                                <?php } else { ?>
                                                    <span class="glyphicon glyphicon-pause pause-premio" id="<?php echo $premio['premioId']; ?>"></span>
                                                <?php } ?>
                                            </td>
                                            <td><span class="glyphicon glyphicon-trash trash-premio" id="<?php echo $premio['premioId']; ?>"></span></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }
                            ?>

                        </table>

                        <br/>               

                        <div class='text-right'>
                            <button class='btn btn-default' id='jogadores-proximo-passo' >Proximo Passo</button>
                        </div>
                    </div>

                    <div class="tab-pane" id="configuracoes">Settings Tab.</div>
                </div>
            </div>

        </div></div></div>

<!-- MODAL ACAO -->
<div class="modal fade my-modal-acao" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="z-index: 999999;" id="acao-modal">
    <div class="modal-dialog" role="document" style="z-index: 999999;">
        <div class="modal-content" style="z-index: 999999;" >
            <div class="modal-header"style="z-index: 999999;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Cadastro de Ação</h4>
            </div>
            <div class="modal-body" style="z-index: 999999;">
                <form method="post" action="../Jogo/createAcao" id="form-cadastra-acao">
                    <div class="row">
                        <!--container-->
                        <div>
                            <div id="page-content" class="margembranca "> 

                                <div class="col-md-12" >

                                    <div class="col-md-12">

                                        <label for="inputEmail" class="col-md-3 control-label">Ação <small>Título</small></label>
                                        <div class="col-md-9 pull-right">
                                            <input type="text" id="acoes" name="acoes" class="form-control titulo-do-item-cadastrado " placeholder="">
                                            <br/>
                                        </div>
                                    </div>

                                    <div class="celular col-md-3 pull-right hide">
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked="true" >
                                            <label class="onoffswitch-label" for="myonoffswitch">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div> 
                                    </div>

                                    <div class='col-md-12'>
                                        <label for="inputEmail" class="col-md-3 control-label" >Vigência</label>
                                        <div class='col-md-9 vigencia-primeira-linha'>
                                            <input type='date' class='col-md-4 almos-form-control input-xs data-abertura-do-item-cadastrado' placeholder="Data" id="datainicio" name="datainicio" />
                                            <div class='col-md-1 almos-form-control-text'><small>a</small></div>
                                            <input type='date' class='col-md-4 almos-form-control input-xs data-fim-do-item-cadastrado' placeholder="Data" id="datatermino" name="datatermino"/>
                                            <div class='col-md-1 almos-form-control-text'><small>das</small></div>
                                        </div><br/>

                                        <div class="col-md-9 pull-right">
                                            <input type='hour' class='col-md-4 almos-form-control' placeholder="00:00"  id="horainicio" name="horainicio" />
                                            <div class='col-md-2 almos-form-control-text text-center'><small>às</small></div>
                                            <input type='hour' class='col-md-4 almos-form-control' placeholder="00:00" id="horatermino" name="horatermino"/>
                                        </div>
                                        <br/>
                                    </div><br/>

                                    <div class="col-md-12" >
                                        <br/>
                                        <label for="inputEmail" class="col-md-3 control1-labe">Objetos</label>
                                        <div class="col-md-9 pull-right ">
                                            <div class = "checbox checboxcontainer" >
                                                <input type="checkbox" id="selecobjetos" name="selecobjetos" value="1"> Selecione o(s) Objetos(s)
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="col-md-9 corpotabobjetos pull-right">
                                        <div id="divSelecionaObj" class="col-md-12 pull-right tabelap">

                                            <?php //print_r($objetos);      ?>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Objeto</th>
                                                        <th>Categoria</th>
                                                        <th><center>Obrig.</center></th>
                                                <th id='masterObjCheck'><center><input type="checkbox" name="opcoes" value="html" /> </center></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    foreach ($objetos as $objeto) {
                                                        if ($objeto['objStatus'] != 0 && $objeto['objStatus'] != 2) {
                                                            ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                            <tr>
                                                                <td><?php echo $objeto['objDescricao']; ?></td>
                                                                <td ><?php echo $objeto['titulo']; ?></td>
                                                                <td><center><input type="checkbox"  class="selectCheckObj" index="" id="<?php echo $objeto['objId']; ?>"/> </center></td>
                                                        <td><center><input type="checkbox" class="statusCheckboxObj" name="objsAcoes[]" value="<?php echo $objeto['objId']; ?>"/> </center></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?> <!penultimo passo>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="col-md-12" id='divObjPorCategoria'>
                                        <br />
                                        <div class="col-md-9 pull-right">
                                            <div class="col-md-8">
                                                <div class = "checbox checboxcontainer" >
                                                    <input type="checkbox" id="objetocategoria" name="objetocategoria" value="1"> <small>Objetos aleatórios pela Categoria</small>
                                                </div> 
                                            </div>
                                            <select class="col-md-4" id="seleccategoria" name="seleccategoria">

                                                <?php
                                                foreach ($categorias as $categoria) {
                                                    if ($categoria['status'] == 1) {
                                                        ?>

                                                        <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['descricao']; ?></option>

                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>

                                    </div>

                                    <!-- Linha do checkbox com opções-->
                                    <div class="col-md-12" id='divObjPorMOD'> 
                                        <div class="col-md-9 pull-right" >
                                            <div class="col-md-8">
                                                <div class = "checbox checboxcontainer"> 
                                                    <input type="checkbox" id="modspacks" name="modspacks" value="1"> MODs/Packs<br/>
                                                </div> 
                                            </div>
                                            <select class="col-md-4" id="selecmod" name="selecmod">
                                                <option value="1">Selecione o MOD/Packs</option>
                                                <?php foreach ($mods as $mod) { ?>
                                                    <option value='<?php echo $mod['id']; ?>'><?php echo $mod['titulo'] . " - <small>" . $mod['descricao'] . '</small>'; ?></option>
                                                <?php } ?>
                                            </select> 
                                        </div>

                                    </div>       
                                    <!--FIM da linha do checkbox com opções--> 

                                    <div class="col-md-12"> <br/>

                                        <label for="inputEmail" class="col-md-3 control-label">Qtd.vezes</label>
                                        <div class="col-md-9">

                                            <input type="number" id="quantidadevezes" name="quantidadevezes" size="4" maxlength="8"  placeholder="" class='contador-input'/> <small>por Jogador, limitado a um total de</small>

                                            <input type="number" id="quantidadevezes" name="totalvezes" size="4" maxlength="8"  placeholder="" class='contador-input'/> <small>vezes</small>
                                        </div>    
                                    </div>

                                    <div class="col-md-12"> <br/>
                                        <label for="inputEmail" class="col-md-3 control-label">Frequencia</label>
                                        <div class="col-md-9">
                                            <input type="number" id="frequecia"  name="frequencia" size="4" maxlength="8" class='contador-input'> <small>vez a cada</small>

                                            <input type="text" id="cadahora" name="cadahora" size="4" maxlength="8"  placeholder="" class='contador-input'><small> hora</small>
                                        </div>    
                                    </div>

                                    <div class="col-md-12"> <br/>
                                        <label for="inputEmail" class="col-md-3 control-label">Para quem</label>
                                        <div class = "checbox checboxcontainer col-md-9" id="div-para-quem-todos-jogadores">
                                            <input type="checkbox" id="todousuario" name="todousuario"  value="1"> <small>Todos os Usuários/Jogadores cadastrados</small>
                                        </div> 
                                    </div>

                                    <div id='divSelecionaUsuario'>

                                        <div class="col-md-12" id="div-para-quem-somente-equipe-titulo">

                                            <div class="col-md-9 pull-right ">
                                                <div class = "checbox checboxcontainer" >
                                                    <input type="checkbox" id="somenteequipe" name="somenteequipe" value="1">  <small>Somente a(s) Equipes(s)</small>
                                                </div> 
                                            </div>
                                        </div>


                                        <div class="col-md-12 corpotabequipes" id="div-para-quem-somente-equipe-tabela">
                                            <div id="table-responsive" class="col-md-9 pull-right tabelap">

                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Selecionar  a Equipe</th>
                                                            <th><center><input type="checkbox" name="opcoes" value="html" id='masterObjCheckEquipes'/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php foreach ($equipes as $equipe) {
                                                            ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                            <tr>
                                                                <td><?php echo $equipe['equipenome']; ?></td>
                                                                <td><center><input type="checkbox"  class="statusCheckboxEquipes" name="equipesAcoes[]" value="<?php echo $equipe['id']; ?>" /> </center></td>

                                                        </tr>

                                                    <?php } ?> <!penultimo passo>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>



                                        <div class="col-md-12">
                                            <div class="col-md-9 pull-right ">
                                                <div class = "checbox checboxcontainer" >
                                                    <input type="checkbox"  id="obrigatorio" name="obrigatorio" value="1">  <small>Obrigatório todos os membros da Equipe finalizarem/participarem</small>
                                                </div> 
                                            </div>
                                        </div>


                                        <div class="col-md-12" id="div-para-quem-definir-manualmente">
                                            <div class="col-md-9 pull-right">
                                                <div class = "checbox checboxcontainer" >
                                                    <input type="checkbox" id="definirmanualmente" name="definirmanualmente" value="1"  data-toggle="modal" data-target="#myModal">  <small>Definir manualmente</small>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputEmail" class="col-md-3 control-label">Dica de tela</label>
                                        <div class="col-md-9 pull-right">
                                            <input type="text" id="dicatela" name="dicatela" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-12"> <br/>
                                        <label for="inputEmail" class="col-md-3 control-label">Texto p/Log</label>
                                        <div class="col-md-9 text-left">
                                            <small>O usuário/jogador "Fulano"</small><br/>
                                            <input type="text" id="textlog" name="textlog"  placeholder="Entre com um verbo" class='form-control'>
                                            <small>a "Ação".</small>
                                        </div>
                                        <br/>
                                    </div>
                                    <br/>                               
                                </div>

                            </div>
                        </div>


                        <!--codigo faz parte da chamada para o código (cadastrarprograma.js)-->
                        <input type="hidden" name="status" id="status" status="checked" />
                        <!--fim do codigo da chamada de java script-->

                        <!-- rodape -->
                        <div class="col-md-12 button-box">
                            <button button='submit' class="btn btn-success pull-right form-btn form-btn-sucess">Salvar</button>
                            <button class="btn btn-danger pull-right form-btn form-btn-danger">Cancelar</button>
                        </div> 

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer hide">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div><!-- /.modal-content -->

<!-- MODAL MISSAO -->
<div class="modal fade my-modal-missao" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="z-index: 999999;" id="missao-modal">
    <div class="modal-dialog modal-lg" role="document" style="z-index: 999999;">
        <div class="modal-content" style="z-index: 999999;" >
            <div class="modal-header"style="z-index: 999999;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Cadastro de Missão</h4>
            </div>
            <div class="modal-body" style="z-index: 999999;">
                <div class="row">
                    <form id="form-cadastra-missao" method="post" action="../jogo/createMissao">
                        <div id="page-content" class="margembranca "> 

                            <div class="col-md-12" >

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-md-3 control-label">Missão</label>

                                        <div class="col-md-9 pull-right">
                                            <input type="text" id="missao" name="missao" class="form-control titulo-do-item-cadastrado"  placeholder="">
                                            <br/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-1 pull-right celular hide">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                        <label class="onoffswitch-label" for="myonoffswitch">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>

                                <!--Linha da Agência -->


                                <div class='col-md-12'>
                                    <label for="inputEmail" class="col-md-3 control-label" >Vigência</label>
                                    <div class='col-md-9 vigencia-primeira-linha'>
                                        <input type='date' class='col-md-4 almos-form-control input-xs data-abertura-do-item-cadastrado' placeholder="Data" id="datainicio" name="datainicio" />
                                        <div class='col-md-1 almos-form-control-text'><small>a</small></div>
                                        <input type='date' class='col-md-4 almos-form-control input-xs data-fim-do-item-cadastrado' placeholder="Data" id="datatermino" name="datatermino"/>
                                        <div class='col-md-1 almos-form-control-text'><small>das</small></div>
                                    </div><br/>

                                    <div class="col-md-9 pull-right">
                                        <input type='hour' class='col-md-4 almos-form-control' placeholder="00:00"  id="horainicio" name="horainicio" />
                                        <div class='col-md-2 almos-form-control-text text-center'><small>às</small></div>
                                        <input type='hour' class='col-md-4 almos-form-control' placeholder="00:00" id="horatermino" name="horatermino"/>
                                    </div>
                                    <br/>
                                </div><br/>


                                <!--FIM Linha da Agência -->
                                <br/><br/>
                                <div class="col-md-12" >
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-md-3 control1-labe">Etapas</label>
                                        <div class="col-md-9 " style="padding-top: 20px;">
                                            <!--aqui começa o paineeeeeeeeeeeeeeeeeeeeeel -->
                                            <div id="playlistTable" class="panel panel-default">
                                                <div class="panel-heading">Rodada #1 (ou Rodada única/recorrente)</div>
                                                <div class="panel-body">
                                                    <!--aqui termina a primeira parte do paineeeeel -->

                                                    <!--Aqui começa a tabela dentro da Panel-->
                                                    <div class="col-md-12">
                                                        <div class="col-md-12" >
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Selecione os Objetos</th>
                                                                            <th>Categorias</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                                        <?php foreach ($objetos as $objetos) {
                                                                            ?>
                                                                            <tr>
                                                                                <td><?php echo $objetos['objDescricao']; ?></td>
                                                                                <td class="text-center"><?php echo $objetos['titulo']; ?></td>
                                                                                <td><input type="checkbox" name="data[Etapa][0][objetos][]" id="data[Etapa][0][objetos][]" value="<?php echo $objetos['id']; ?>"/> </td>
                                                                            </tr>
                                                                        <?php } ?>  <!penultimo passo>
                                                                    </tbody>  
                                                                </table>
                                                            </div>
                                                        </div>				<!--Aqui termina a tabela dentro da Panel-->

                                                        <div class="col-md-12" style="padding-top: 10px; padding-bottom: 10px;">

                                                            <div class="form-group">
                                                                <label for="inputEmail" class="col-md-4 control-label">Dica de tela</label>
                                                                <div class="col-md-7">
                                                                    <input type="text" class="form-control col-md-12" name="data[Etapa][0][dicatela][]" id="data[Etapa][0][dicatela][]" placeholder="">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <label for="inputEmail" class="col-md-4 control-label">Imagem</label>
                                                                <div class="col-md-7 ">
                                                                    <a href="#" class="ico-search"><small>clique aqui para importar outra imagem</small></a>
                                                                </div>
                                                            </div>

                                                        </div> 
                                                        <!--Linha da data limite-->

                                                        <div class="col-md-12" style="padding-bottom: 10px;">

                                                            <div class="form-group">
                                                                <label for="inputEmail" class="col-md-4 control-label">Data limite</label>

                                                                <div class="col-md-2 ">
                                                                    <input  type="date"  name="data[Etapa][0][datalimite][]" id="data[Etapa][0][datalimite][]" value=" " class= "form-control textbox70"/> 
                                                                </div>
                                                            </div>
                                                        </div> 

                                                        <div class="col-md-12" style="padding-bottom: 10px;">
                                                            <div class="form-group">
                                                                <label for="inputEmail" class="col-md-4 control-label">Hora limite</label>
                                                                <div class="col-md-1 ">
                                                                    <input type="text" class="form-control col-md-8"  name="data[Etapa][0][horalimite][]" id="data[Etapa][0][horalimite][]" placeholder="00:00">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12" style="padding-bottom: 10px;">

                                                            <div class="form-group" >
                                                                <label for="inputEmail" class="col-md-4 control-label">Mensagem Parabéns</label>
                                                                <div class="col-md-8 pull-right">
                                                                    <input type="text" class="form-control " name="data[Etapa][0][mensagemparabens][]" id="data[Etapa][0][mensagemparabens][]"  placeholder="">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12" >

                                                            <div class="form-group">
                                                                <label for="inputEmail" class="col-md-4 control-label">Conteúdo destravado</label>
                                                                <div class="col-md-7 ">
                                                                    <a href="#" class="ico-search"><small>Clique aquí para importar conteúdo</small></a>
                                                                </div>
                                                            </div>

                                                        </div> 

                                                    </div>
                                                </div>

                                                <!-- começa a parte final do painel-->
                                                <!--botão de adicoanar linhas (+)-->
                                                <table id="playlistTableMissao" class="panel-footer" >
                                                    <div class="panel-footer" >
                                                        <?php $json = json_encode($objetos); ?>
                                                        <div class="col-md-2 pull-right adiciona"><button onclick="AddTableRowMissao()" type="button"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true">
                                                                </span></button> </div></div>
                                                </table>
                                                <!-- Fim botão de adicoanar linhas(+)-->
                                            </div>
                                            <!--aqui termina o paineeeeeeeeeeeeeeeeeeeeeel -->

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-md-3 control-label">Para quem</label>
                                        <div class = "checbox checboxcontainer col-md-9">
                                            <input type="radio" id="usuariojogadores" name="usuariojogadores"  value="1"> Todos os Usuários/Jogadores cadastrado
                                        </div> 
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-9 pull-right ">
                                        <div class = "checbox checboxcontainer">
                                            <input type="radio" id="somenteequipe" name="somenteequipe"  value="0">  Somente a(s) Equipes(s)
                                        </div> 
                                    </div>
                                </div>

                                <div id="Layer1" class="col-md-9 corpotabequipes pull-right"> 

                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Selecione a Equipe</th>
                                                    <th><center>Ativo</center></th> 
                                            </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($equipes as $equipe) {
                                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                    <tr>
                                                        <td><?php echo $equipe['equipenome']; ?></td>
                                                        <td><center><input type="checkbox"class="statusCheckboxEquipes" name="equipesMissoes[]" value="<?php echo $equipe['id']; ?>" /> </center></td>

                                                </tr>

                                            <?php } ?> <!penultimo passo>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="col-md-9 pull-right">
                                    <div class = "checbox checboxcontainer">
                                        <input type="checkbox" id="manualmente" name="manualmente" value="1"  data-toggle="modal" data-target="#myModal">  Definir manualmente
                                    </div> 
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-md-3 control-label">Dica de tela</label>
                                        <div class="col-md-9 ">
                                            <input type="text" id="dicatela" name="dicatela" class="form-control " placeholder="">
                                            <br/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-md-3 control-label">Mensagem Parabéns</label>
                                        <div class="col-md-9">
                                            <input type="text" id="msgparabens" name="msgparabens" class="form-control" placeholder="">
                                            <br/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12"> <br/>
                                    <label for="inputEmail" class="col-md-3 control-label">Texto p/Log</label>
                                    <div class="col-md-9 text-left">
                                        <small>O usuário/jogador "Fulano"</small><br/>
                                        <input type="text" id="textlog" name="textlog"  placeholder="Entre com um verbo" class='form-control'>
                                        <small>a "Ação".</small>
                                    </div>
                                    <br/>
                                </div>

                            </div>
                        </div> <!--FIM margem branca-->
                        <input type="hidden" name="status" id="status"/>
                        <!-- rodape -->
                        <div class='col-md-12 button-box'>
                            <button type="submit" class="btn btn-success pull-right form-btn form-btn-sucess">Salvar</button>
                            <button class="btn btn-danger pull-right form-btn form-btn-danger">Cancelar</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer hide">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

<!-- MODAL PREMIO -->
<div class="modal fade my-modal-missao" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="z-index: 999999;" id="premio-modal">
    <div class="modal-dialog" role="document" style="z-index: 999999;">
        <div class="modal-content" style="z-index: 999999;" >
            <div class="modal-header"style="z-index: 999999;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="fecha-modal-premio"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Cadastro de Premio</h4>
            </div>
            <div class="modal-body" style="z-index: 999999;">
                <div class="row">
                    <form  method="post" action="../Jogo/cadastrarPremio" id="form-cadastra-premio">
                        <!--container-->
                        <div class="col-md-12 container-style ">
                            <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
                                <span>
                                    <div class="alert alert-success" role="alert">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                        <?php echo $this->session->flashdata('cadSucesso'); ?>
                                    </div>
                                </span>
                            <?php } ?>
                            <div id="page-content" class="margembranca "> 

                                <div class="col-md-12" >

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Nome</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control tamanho titulo-do-item-cadastrado premio-input-nome" name="nome" id="inputEmail" placeholder="Nome">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>

                                    <!--ativo celular-->                  
                                    <div class="celular col-md-3 hide">
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="status" class="onoffswitch-checkbox" value="1" id="myonoffswitch" checked>
                                            <label class="onoffswitch-label" for="myonoffswitch">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--FIM ativo celular-->

                                    <div class="col-md-12" >
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Tipo</label>
                                            <?php // print_r($tipospremio);   ?>
                                            <div class="col-md-9">
                                                <select class="span1 form-control premio-input-tipo" name="tipopremio_id">
                                                    <?php
                                                    foreach ($tipospremio as $tipo) {
                                                        if ($tipo['status'] == 1) {
                                                            ?>
                                                            <option id="<?php echo $tipo['id']; ?>" value="<?php echo $tipo['id']; ?>"><?php echo $tipo['descricao']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </select> <br/>
                                                <br/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control1-labe">Descrição</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control premio-input-descricao" name="descricao"></textarea>
                                                <br/>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Imagens</label>
                                            <div class="col-md-9">
                                                <a href="#" class="ico-search">Clique aqui para selecionar a imagem</a>
                                            </div>
                                            <br/>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Site</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control " id="inputEmail" placeholder="Site" name="site">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Link adicional</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control tamanho" id="inputEmail" placeholder="Link Adicional" name="linkadicional">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control1-labe">Informações adicionais</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" placeholder="Informações Adicionais" name="informacoesadicionais"></textarea>
                                                <br/>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label"><small>Instruções para receber o prêmio</small></label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" placeholder="Instruções" name="intrucoes"></textarea>
                                                <br/>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <br/>
                                            <label for="inputEmail" class="col-md-3 control-label"><small>Quantidade</small></label>
                                            <div class="col-md-9">
                                                <div class = "checbox " >
                                                    <input type="radio"  value="nome" id="premioIlimitado"> ilimitado/sem controle 
                                                </div> 

                                                <div class = "checbox checboxcontainer">
                                                    <input type="radio" name="quantidadecontrolada" id="premioControlado"> com controle de estoque
                                                </div>                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">

                                        <label for="inputEmail" class="col-md-3 control1-labe"> </label>
                                        <div class="col-md-9 pull-right">
                                            <div class="col-md-4"><small>Qtd.inicial</small></div> 
                                            <input type="number"  size="5" maxlength="8"   placeholder="0" class="col-md-3 numberfield" id="quantidadepremios" name="quantidadepremios">
                                        </div>

                                        <div class="col-md-9 pull-right">
                                            <div class="col-md-4"> <small>Qtd.atual</small></div>
                                            <input type="number"  size="5" maxlength="8"  placeholder="0" class="col-md-3 numberfield"  id="quantidadeatualpremios" name="quantidadeatualpremios">  <a href="#" class="ico-search1">redefinir</a>
                                            <br/>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control1-labe"><small>Disponibilidade</small></label>
                                            <div class="col-md-9">
                                                <div class = "checbox checboxcontainer" >
                                                    <input type="radio"  value="1" id="disponibilizadoPorConquista"> por conquista
                                                </div> 

                                                <div class = "checbox checboxcontainer" >
                                                    <input type="radio"  value="1" name="catalogopremio" id="disponibilizadoCatalogo"> no Catálogo de Prêmios
                                                </div>    

                                                <small>Qtd.Pontos </small>
                                                <input type="number" size="4" maxlength="8" id="quantidadedisponibilizadade" placeholder="" class="numberfield pontos-do-item-cadastrado" class='col-md-4' name="quantidadedisponibilizadade">
                                            </div>
                                        </div>
                                        <br/><br/>
                                    </div>

                                </div>
                            </div>

                            <!-- rodape -->
                            <div class="col-md-12 button-box">
                                <br/><br/>
                                <button button='submit' class="btn btn-success pull-right form-btn form-btn-sucess">Salvar</button>
                                <button  type="reset" class="btn btn-danger pull-right form-btn form-btn-danger">Cancelar</button>
                            </div> 

                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal-footer hide">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

<!-- MODAL DESAFIO -->
<div class="modal fade my-modal-missao" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="z-index: 999999;" id="desafio-modal">
    <div class="modal-dialog" role="document" style="z-index: 999999;">
        <div class="modal-content" style="z-index: 999999;" >
            <div class="modal-header"style="z-index: 999999;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Cadastro de Desafio</h4>
            </div>
            <div class="modal-body" style="z-index: 999999;">
                <div class="row">
                    <form id="form-cadastra-desafio" method="post" action="../jogo/createDesafio">
                        <div class="col-md-12 row">
                            <div class="col-md-12 row" >
                                <div class="col-md-12">
                                    <label for="inputEmail" class="col-md-3 control-label" style="padding-left: 0px;">Desafio</label>
                                    <div class="col-md-9 pull-right" style="padding: 0px;">
                                        <input type="text" id="nome" name="nome" class="form-control titulo-do-item-cadastrado " placeholder="">
                                        <br/>
                                    </div>
                                </div>

                                <div class="col-md-1 pull-right celular hide">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                        <label class="onoffswitch-label" for="myonoffswitch">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class='col-md-12'>
                                    <label for="inputEmail" class="col-md-3 control-label" >Vigência</label>
                                    <div class='col-md-9 vigencia-primeira-linha'>
                                        <input type='date' class='col-md-4 almos-form-control input-xs data-abertura-do-item-cadastrado' placeholder="Data" id="datainicio" name="datainicio" />
                                        <div class='col-md-1 almos-form-control-text'><small>a</small></div>
                                        <input type='date' class='col-md-4 almos-form-control input-xs data-fim-do-item-cadastrado' placeholder="Data" id="datatermino" name="datatermino"/>
                                        <div class='col-md-1 almos-form-control-text'><small>das</small></div>
                                    </div><br/>

                                    <div class="col-md-9 pull-right">
                                        <input type='hour' class='col-md-4 almos-form-control' placeholder="00:00"  id="horainicio" name="horainicio" />
                                        <div class='col-md-2 almos-form-control-text text-center'><small>às</small></div>
                                        <input type='hour' class='col-md-4 almos-form-control' placeholder="00:00" id="horatermino" name="horatermino"/>
                                    </div>
                                    <br/>
                                </div><br/>

                                <div class="col-md-12"> 
                                    <br/>
                                    <label for="text" class="col-md-3 control1-labe" >Desafiante</label>
                                    <div class="col-md-9" >
                                        <div class = "checbox checboxcontainer" >
                                            <input type="radio"  value="0" id="selecdesafianteequipe" name="selecdesafianteequipe" > <small>Selecione o Desafiante</small>
                                        </div>    
                                    </div>
                                    <div class="col-md-9 pull-right">
                                        <select id="selecfuncionario" name="selecfuncionario" class='form-control'>
                                            <option valie="0">Selecione o Funcionário</option>
                                            <?php foreach ($jogadores as $jogador) { ?>
                                                <option value="<?php echo $jogador['id']; ?>"><?php echo $jogador['nome']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>



                                <div class = "col-md-12" >
                                    <br/>
                                    <div class="col-md-9 pull-right">
                                        <input type="radio"  value="1" id="selecdesafianteequipe" name="selecdesafianteequipe" /> Selecione a Equipe Desafiante
                                    </div>
                                    <div class="col-md-9 pull-right">
                                        <select class="form-control" id="selecequipe" name="selecequipe">
                                            <option value="0">Selecione a Equipe</option>
                                            <?php foreach ($equipes as $equipe) { ?>
                                                <option value="<?php echo $equipe['id']; ?>"> <?php echo $equipe['equipenome']; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12"> 
                                    <br/>
                                    <label for="inputEmail" class="col-md-3 control1-labe" >Desafiados</label>
                                    <div class="col-md-9" >
                                        <div class = "checbox checboxcontainer" >
                                            <input type="radio"  value="0" id="desafiantetodos" name="desafiantetodos"> Desafiante escolhe manualmente
                                        </div>    
                                        <div class = "checbox checboxcontainer" >
                                            <input type="radio"  value="1" id="desafiantetodos" name="desafiantetodos"> Todos da(s) Equipes(s)
                                        </div>   
                                    </div>
                                </div>

                                <div class="col-md-9 pull-right">
                                    <div>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Selecione a Equipe</th>
                                                    <th><center><input type="checkbox" name="opcoes" value="html" /> </center></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($equipes as $equipe) {
                                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                                    <tr>
                                                        <td><?php echo $equipe['equipenome']; ?></td>
                                                        <td><center><input type="checkbox" class="statusCheckboxObj" name="equipesDesafios[]" id="equipesDesafios[]" value="<?php echo $equipe['id']; ?>"/> </center> </td>
                                                </tr>
                                            <?php } ?> <!penultimo passo>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>




                                <div class="col-md-12">
                                    <div class="col-md-9 pull-right ">
                                        <div class = "checbox checboxcontainer" >
                                            <input type="radio" value="0" id="definirmanualmente" name="definirmanualmente"> <small>Definir manualmente</small>
                                        </div> 
                                    </div>
                                </div>

                                <div class="col-md-12 ">    <br/>
                                    <label for="inputEmail" class="col-md-3 control-label">Objetos</label>
                                    <div class="col-md-9 pull-right">
                                        <div id="table-responsive" class="col-lg-12 pull-right tabelap">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Objetos</th>
                                                        <th><center>Categoria</center></th>
                                                <th><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($objetosDesafio as $obj) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $obj['objDescricao']; ?></td>
                                                            <td class="text-center"><?php echo $obj['titulo']; ?></td>
                                                            <td><center><input type="checkbox" name="objetosDesafio[]" class="statusCheckbox" id="<?php echo $obj['objId']; ?>" value="<?php echo $obj['objId']; ?>" /> </center></td>
                                                    </tr>
                                                <?php } ?>  <!penultimo passo>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-12" >

                                    <label for="inputEmail" class="col-md-3 control-label">Interação</label>
                                    <div class="col-md-9 pull-right">
                                        <input type="radio"  value="0" name="identificada" name="identificada" checked> <small>Identificada</small>
                                    </div>
                                    <div class="col-md-9 pull-right">
                                        <input type="radio"  value="0" id="anonima" name="anonima"> <small>Anônima(resposta através da web)</small>
                                    </div>
                                    <div class="col-md-9 pull-right">
                                        <input type="radio"  value="0" id="desafiadoescolhe" name="desafiadoescolhe"> <small>Deixar Desafiado(s) escolher(em)</small>
                                    </div>

                                </div>

                                <div class="col-md-12" >
                                    <br/>
                                    <label for="inputEmail" class="col-md-3 control-label">Obrigatório</label>
                                    <div class="col-md-9 pull-right">
                                        <input type="radio"  value="0" id="obrigatorio" name="obrigatorio"> <small>Sim</small>
                                    </div>
                                    <div class="col-md-9 pull-right">
                                        <input type="radio"  value="1" id="obrigatorio" name="obrigatorio"> <small>Não</small>
                                    </div>
                                </div>

                                <div class="col-md-12" >

                                    <label for="inputEmail" class="col-md-3 control-label"> <small>Pontuação Extra para Desafiante</small></label>
                                    <div class="col-md-9 pull-right">
                                        <input type="checkbox"  value="0" id="" name="pontuacaoextra" checked> <small>Recebe os pontos das respostas/Interações erradas</small>
                                    </div>
                                    <br/>
                                    <div class='col-md-12'>
                                        <br />
                                        <div class="col-md-3">
                                            Perde 
                                        </div>
                                        <div class="col-md-9 verbocx" style="padding-bottom: 5px;">
                                            <input type="number" name="perde" size="10" maxlength="8" id="perde" placeholder="" class='col-md-12'> <br/><small>pontos se não receber nenhuma interação</small>
                                        </div>
                                    </div>

                                    <div class='col-md-12'>
                                        <div class="col-md-3">
                                            Ganha
                                        </div>
                                        <div class="col-md-9 verbocx">
                                            <input type="number" name="ganha" size="10" maxlength="8" id="ganha" placeholder="" class='col-md-12 pontos-do-item-cadastrado'> <small>pontos se receber interação</small>
                                        </div>
                                    </div>

                                </div> 

                                <div class="col-md-12"> <br/>
                                    <label for="inputEmail" class="col-md-3 control-label">Dica de tela</label>
                                    <div class="col-md-9 pull-right">
                                        <input type="text" id="dicatela" name="dicatela" class="form-control " placeholder="">
                                        <br/>
                                    </div>
                                </div>

                            </div>

                            <!-- linha de codigo para o onoffswit-->
                            <input type="hidden" name="status" id="status" />

                            <!-- rodape -->
                            <div>
                                <button type="submit" class="btn btn-primary pull-right btnazul" id="submitCad_DESAFIO">Salvar</button>
                                <button class="btn btn-deafult pull-right">Cancelar</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Selecione os Usuarios/Jogadores:</h4>
            </div>
            <div class="modal-body">

                <table class="tablesorter">
                    <thead>
                        <tr>
                            <th style="border-width: thin; border-style: solid; border-color: black;">Selecionar  os Jogadores</th>
                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html" id='masterObjCheckEquipes'/> </center></th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($jogadores as $jogador) {
                            ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                            <tr>
                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $jogador['nome']; ?></td>
                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox"  class="statusCheckboxEquipes" name="jogadoresAcoes[]" value="<?php echo $jogador['id']; ?>" /> </center></td>

                        </tr>

                    <?php } ?> <!penultimo passo>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- RECONHECIMENTO/ CONQUISTAS MODAL -->
<div class="modal fade my-modal-missao" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="z-index: 999999;" id="reconhecimento-modal">
    <div class="modal-dialog" role="document" style="z-index: 999999;">
        <div class="modal-content" style="z-index: 999999;" >
            <div class="modal-header"style="z-index: 999999;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Cadastro de Reconhecimento/Conquista</h4>
            </div>
            <div class="modal-body" style="z-index: 999999;">
                <div class="row">
                    <div class="col-md-12 row">
                        <form method="post" action="../reconhecimento/createConquista">      

                            <div id="page-content " class="col-md-12 row"> 

                                <div class="col-md-12" >
                                    <label for="inputEmail" class="col-md-3 control-label">Tipo</label>
                                    <div class="col-md-9 pull-right">
                                        <select class="form-control" id="tipo" name="tipo">
                                            <option value='0'>Selecione</option>
                                            <?php foreach ($tiposReconhecimento as $reconhecimento) { ?>
                                                <option value="<?php echo $reconhecimento['descricao']; ?>"><?php echo $reconhecimento['descricao']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-1 pull-right celular hide" >
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                        <label class="onoffswitch-label" for="myonoffswitch">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span> 
                                        </label>
                                    </div>
                                </div> 

                                <div class="col-md-12" > <br/>
                                    <label for="inputEmail" class="col-md-3 control-label"><small>Reconhecimento /Conquista</small></label>
                                    <div class="col-md-9 pull-right">
                                        <input type="text" class="form-control titulo-do-item-cadastrado " value=" " id="conquista" name="conquista" placeholder="">
                                        <br/>
                                    </div>
                                </div>

                                <div class="col-md-12" > <br/>
                                    <label for="inputEmail" class="col-md-3 control-label">Modo de aferiação</label>

                                    <div id='divPorPontos'>
                                        <div class="col-md-3">
                                            <input type="checkbox" id="checkporpontos" value="Por Pontos" name='modoafericao'> <small>Por Pontos</small>
                                        </div>

                                        <div class="col-md-2 ">
                                            <small><small>Quantidade de Pontos</small></small>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number"id="quantidadeponto" name="quantidadeponto"  size="15" maxlength="8" class='col-md-9'  placeholder=""> 
                                        </div>
                                    </div>

                                    <div class="col-md-9 pull-right">
                                        <input type="checkbox" id="checkporacoes" value="Por Ações" name='modoafericao'> <small>Por Ações(não sequencias)</small>
                                    </div>
                                </div>



                                <div class="col-md-9 pull-right" id='divPorAcoes'>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Selecione as Ações</th>		
                                                <th><center><input type="checkbox" name="opcoes" value="html" /> </center></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($acoestable as $acoestable) {
                                                ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                                <tr>
                                                    <td><?php echo $acoestable['acoes']; ?></td> <!--ultimo passo , já conferindo no BD-->
                                                    <td><center><input type="checkbox" name="objsAcoes[]" value='<?php echo $acoestable['id']; ?>'/> </center></td>
                                            </tr>

                                        <?php } ?> <!penultimo passo>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="col-md-12">
                                    <div class="col-md-9 pull-right">
                                        <div class = "checbox checboxcontainer"> 
                                            <input type="checkbox" id="checkpormissao" value="Por Missão" name='modoafericao'> <small>Por Missão</small><br/>
                                        </div> 
                                    </div>
                                </div>

                                <div class="col-md-9 pull-right">
                                    <select class="col-md-12 form-control" id="afericao_missao" name="afericao_missao">
                                        <option value='0'>Selecione a Missão</option>
                                        <?php foreach ($missoes as $missao) { ?>
                                            <option value='<?php echo $missao['id']; ?>'><?php echo $missao['missao']; ?></option>              
                                        <?php } ?>

                                    </select> 
                                </div>



                                <div class="col-md-12" id='divPorPrograma'>
                                    <br/>
                                    <div class="col-md-9 pull-right">
                                        <div class = "checbox checboxcontainer"> 
                                            <input type="checkbox" id="checkporprograma"  value="Por Programa" name='modoafericao'><small> Por Programa</small><br/>
                                        </div> 
                                    </div>
                                    <div class="col-md-9 pull-right">
                                        <select class="form-control col-md-12"    id="afericao_programa" name="afericao_programa">
                                            <option>Selecione o programa</option>
                                            <?php foreach ($programas as $programa) { ?>
                                                <option value='<?php echo $programa['id']; ?>'><?php echo $programa['nome']; ?></option>              
                                            <?php } ?>
                                        </select> 
                                    </div> 
                                </div>
                                <div class="col-md-12" id='divPorMod'>
                                    <br/>
                                    <div class="col-md-9 pull-right">
                                        <div class = "checbox checboxcontainer"> 
                                            <input type="checkbox" id="chechpormod" value="Por MOD/PACK" name='modoafericao'> <small>Por MOD/PACK</small><br/>
                                        </div> 
                                    </div>
                                    <div class="col-md-9 pull-right">
                                        <select class="form-control" id="afericao_modpack" name="afericao_modpack">
                                            <option>Selecione o Mod</option>
                                            <?php foreach ($mods as $mod) { ?>
                                                <option id='<?php echo $mod['id']; ?>'><?php echo $mod['titulo'] . ' - ' . $mod['descricao']; ?></option>
                                            <?php } ?>
                                        </select> 
                                    </div> 
                                </div>

                                <div class="col-md-12">
                                    <br />
                                    <label for="inputEmail" class="col-md-3 control-label"><small>Sobre o reconhecimento</small></label>
                                    <div class="col-md-9 pull-right">
                                        <input type="text" class="form-control " id="reconhecimento" name="reconhecimento" placeholder="">
                                        <br/>
                                    </div>
                                </div> 

                                <div class="col-md-12">
                                    <label for="inputEmail" class="col-md-3 control-label">Bagde/Imagem</label>
                                    <div class="col-md-9">
                                        <a href="#" class="ico-search">clique aqui para importar outra imagem</a>
                                    </div>
                                </div>

                                <div class="col-md-9 pull-right">
                                    <br />
                                    <div class="col-md-4"> 
                                        <input type="checkbox" id="expira" name="expira"  value="0" class='almos-form-control'> <small>Reconhecimento expira em</small>
                                    </div> 

                                    <div class="col-md-8">
                                        <input name="nascimento" type="date"  id="month" value=" " class= "textbox70"/>
                                    </div>  
                                </div>

                                <div class="col-md-12">
                                    <br/>
                                    <label for="inputEmail" class="col-md-3 control-label">Mensagem</br>Parabéns</label>
                                    <div class="col-md-9 pull-right">
                                        <input type="text" class="form-control " id="parabens" name="parabens" placeholder="">
                                        <br/>
                                    </div>
                                </div>

                                <div class="col-md-12" >
                                    <label for="inputEmail" class="col-md-3 control-label">Conteudo destravado</label>
                                    <div class="col-md-9 ">
                                        <a href="#" class="ico-search">clique aqui para importar outra imagem</a>
                                    </div>
                                </div>

                                <div class="col-md-12" ><br/>

                                    <label for="inputEmail" class="col-md-3 control-label">Premiação</label>
                                    <div class="col-md-9 pull-right">
                                        <select class="form-control col-md-12" id="premiacao" name="premiacao">
                                            <option value="1">Selecione o prêmio</option>
                                            <option value="2">Viagem</option>
                                            <option value="3">Eletrodomésticos</option>
                                            <option value="4">Eletroeletrónico</option>
                                            <option value="5">Celular/Smartphone</option>
                                            <option value="6">Computador/Tablet</option>
                                            <option value="7">Show/Entretenimento</option>
                                            <option value="8">Comida/Gastronomia</option>
                                            <option value="9">Bebida/Enogastronomia</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-12"> <br/>
                                    <label for="inputEmail" class="col-md-3 control-label">Pontos extras</label>
                                    <div class="col-md-2">
                                        <input type="text" name="pontosextras" id="pontosextras" size="8" maxlength="8"  placeholder="">
                                    </div>
                                    <div class = "col-md-7 text-center"> 
                                        <input type="checkbox" id="pontuaequipe" name="pontuaequipe" value="nome"> <small><small>Pontua também a(s) Equipes(s) que o usuário/jogador faz parte</small></small><br/>
                                    </div> 
                                </div>

                                <div class="col-md-12"> <br/>
                                    <label for="inputEmail" class="col-md-3 control-label">Texto p/Log</label>
                                    <div class="col-md-9 text-left">
                                        <small>O usuário/jogador "Fulano"</small><br/>
                                        <input type="text" id="textlog" name="textlog"  placeholder="Entre com um verbo" class='form-control'>
                                        <small>a "Ação".</small>
                                    </div>
                                    <br/>
                                </div>

                            </div>
                        </form>
                        <div>
                            <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                            <button class="btn btn-deafult pull-right">Cancelar</button>
                        </div> 
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- P R O G R A M A    M O D A L -->
<div class="modal fade my-modal-missao bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="z-index: 999999;" id="programa-modal">
    <div class="modal-dialog modal-lg" role="document" style="z-index: 999999;">
        <div class="modal-content" style="z-index: 999999;" >
            <div class="modal-header"style="z-index: 999999;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Cadastro de Programa</h4>
            </div>
            <div class="modal-body" style="z-index: 999999;">
                <form method="post" action="../jogo/createPrograma" id="form-cadastra-programa" >
                    <div class="row">
                        <div class="col-md-12 row">

                            <form  method="post" action="../programas/createPrograma">
                                <!--container-->
                                <div class="col-md-12">
                                    <div id="page-content" class="margembranca "> 

                                        <div class="col-md-12" >

                                            <div class="col-md-12">
                                                <label for="inputEmail" class="col-md-3 control-label">Programa</label>
                                                <div class="col-md-9 pull-right">
                                                    <input type="text" name="nome" id="nome" class="form-control titulo-do-item-cadastrado "  placeholder="">
                                                    <br/>
                                                </div>
                                            </div>

                                            <div class="col-md-1 pull-right celular hide">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <!--Linha da Agência -->
                                            <div class='col-md-12'>
                                                <label for="inputEmail" class="col-md-3 control-label" >Vigência</label>
                                                <div class='col-md-9 vigencia-primeira-linha'>
                                                    <input type='date' class='col-md-4 almos-form-control input-xs data-abertura-do-item-cadastrado' placeholder="Data" id="datainicio" name="datainicio" />
                                                    <div class='col-md-1 almos-form-control-text'><small>a</small></div>
                                                    <input type='date' class='col-md-4 almos-form-control input-xs data-fim-do-item-cadastrado' placeholder="Data" id="datatermino" name="datatermino"/>
                                                    <div class='col-md-1 almos-form-control-text'><small>das</small></div>
                                                </div><br/>

                                                <div class="col-md-9 pull-right">
                                                    <input type='hour' class='col-md-4 almos-form-control' placeholder="00:00"  id="horainicio" name="horainicio" />
                                                    <div class='col-md-2 almos-form-control-text text-center'><small>às</small></div>
                                                    <input type='hour' class='col-md-4 almos-form-control' placeholder="00:00" id="horatermino" name="horatermino"/>
                                                </div>
                                                <br/>
                                            </div><br/>
                                            <!--FIM Linha da Agência -->

                                            <div class="col-md-12">
                                                <br/>
                                                <label for="inputEmail" class="col-md-3 control-label">Objetivo</label>
                                                <div class="col-md-9 pull-right">
                                                    <input type="text" id="objetivo" name="objetivo" class="form-control " placeholder="">
                                                    <br/>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="inputEmail" class="col-md-3 control-label">Local/Mapa</label>
                                                <div class="col-md-9 pull-right">
                                                    <input type="text" id="localmapa" name="localmapa" class="form-control " placeholder="">
                                                    <br/>
                                                </div>
                                            </div>

                                            <div class="col-md-9 pull-right ">
                                                <a href="#" class="ico-search">Link para imagem/mapa</a>
                                            </div>
                                            <!--Aqui temian a primeira parte da tela ,a parte brancaaaaaaaaa-->
                                        </div>

                                        <div class="jumbotron col-md-12">

                                            <div class="col-md-12"> <br/>
                                                <label for="inputEmail" class="col-md-3 control-label"><small>Participantes</small></label>
                                                <div class = "checbox checboxcontainer col-md-5 pull-rightl">
                                                    <input type="radio" class="tipoSelecaoParticipantes" id="participantes" name="tipoParticipantes" value="participantes_equipes_existents"> <small>Definir pelas Equipes existentes</small>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <a href="#" class="ico-search"><small>Participantes definidos.Clique para alterar</small></a>
                                                </div> 
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-9 pull-right">
                                                    <div class = "checbox checboxcontainer" >
                                                        <input type="radio" class="tipoSelecaoParticipantes" id="participantes" name="tipoParticipantes" value="participantes_manual"> <small>Definir manualmente</small>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="col-md-12"> <br/>
                                                <label for="inputEmail" class="col-md-3 control-label">Times</label>

                                                <div class = "checbox checboxcontainer col-md-5 pull-rightl">
                                                    <input type="radio" name="tipoTimes"  value="time_sem_time" class="tipoTimes"> <small>Sem Time (individual)</small>
                                                </div> 

                                                <div class = "checbox checboxcontainer col-md-9 pull-rightl">
                                                    <input type="radio" name="tipoTimes"  value="time_por_equipes" class="tipoTimes"> <small>Times baseados nas Equipes existentes</small>
                                                </div> 

                                                <div class = "checbox checboxcontainer col-md-9 pull-right">
                                                    <input type="radio" name="tipoTimes"  value="time_jogadores_escolhem" class="tipoTimes">  <small>Jogadores escolhem os Times</small>
                                                </div> 

                                                <div class = "checbox checboxcontainer col-md-9 pull-right ">
                                                    <input type="radio" name="tipoTimes" value="time_sistema_escolhe" class="tipoTimes"><small>Sistemas escolhe os Times</small>
                                                    <div class="col-md-8 pull-right" >
                                                        <div class="col-md-5 pull-right text-center">
                                                            <small>Jogad. por Time</small>
                                                            <input type="text" name="qtd" placeholder="Qtd." size="4" maxlength="8" id="Qtd." placeholder="" class="input-xs"> 
                                                        </div>

                                                        <div class="col-md-7 pull-right text-center" >
                                                            <small>Nome Times(prefixo)</small> <input type="text" name="qtd." size="6" maxlength="8" class="input-xs"/>

                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>

                                            <div class="col-md-12"> <br/>
                                                <label for="inputEmail" class="col-md-3 control-label">Personagens</label>
                                                <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                                    <input type="radio" name="temPersonagens" value="nao" class="temPersonagens"> <small>Não (único)</small>
                                                </div> 

                                                <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                                    <input type="radio" name="temPersonagens"  value="sim" class="temPersonagens"> <small>Sim</small>
                                                </div> 

                                                <div class="col-md-4 ">
                                                    <a href="#" class="ico-search"> <small>Participantes definidos.Clique para alterar</small></a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-5 pull-right ">
                                                    <div class = "checbox checboxcontainer" >
                                                        <input type="checkbox"  value="nome"> <small>Jogadores escolhem os Personagens a cada rodada</small>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>

                                        <!--Aqui temina a segunda parte da tela ,a parte cinzaaaaa-->

                                        <div class="col-md-6"> 
                                            <label for="inputEmail" class="col-md-3 control-label">Rodadas</label>
                                            <div class="col-md-9 pull-right">
                                                <input type="text" name="rodadasvezes" id="rodadasvezes" size="2" maxlength="8" placeholder="02" class="col-md-2 input-no-padding" /> <div class="col-md-9 text-center"><small> vezes (deixe em branco para indefinido)</small></div>
                                            </div> 
                                        </div>

                                        <div class="col-md-6"> 
                                            <div class = "checbox checboxcontainer col-md-12">
                                                <input type="checkbox" id="rodadasdiferentes" name="rodadasdiferentes" value="0"> <small>Rodadas diferentes (default são rodadas recorrentes/iguais)</small>
                                            </div>
                                        </div>

                                        <div class="col-md-12" > <br/>
                                            <div class="col-md-10 pull-right">
                                                <div>
                                                    <div class = "checbox checboxcontainer col-md-4" >
                                                        <input type="radio" id="automaticarodada" name="rodadas" value="0">  <small>Rodada automática</small>
                                                    </div>

                                                    <div class="col-md-8">
                                                        <small>a cada </small><input type="number" name="intervalo" id="intervalo" size="7" maxlength="8" placeholder="" ><small> minutos (intervalo)</small>
                                                    </div>
                                                </div>
                                                <br /><br/>
                                                <div>
                                                    <div class = "checbox checboxcontainer col-md-5">
                                                        <input type="radio" id="gestorrodada"  value="1" name="rodadas">  <small>Rodada disparada pelo Gestor</small>
                                                    </div> 

                                                    <div class = "checbox checboxcontainer col-md-5">
                                                        <select class="col-md-9" id="gestor_id" name="gestor_id">
                                                            <option value="1">Selecione o Gestor</option>
                                                            <?php foreach ($gestores as $gestor) { ?>
                                                                <option value="<?php echo $gestor['id']; ?>"><?php echo $gestor['nome']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12"> 
                                            <div class="col-md-10 pull-right" >
                                                <div class = "checbox checboxcontainer col-md-5" >
                                                    <input type="radio" id="facilitadorrodada" name="rodadas" value="facilitadorrodada" checked>  <small>Rodada disparada pelo Facilitador</small>
                                                </div> 

                                                <div class = "checbox checboxcontainer col-md-5" >
                                                    <select id="facilitador_id" name="facilitador_id" class="col-md-9">
                                                        <option value="0">Selecione o Facilitador</option>
                                                        <?php foreach ($facilitadores as $faciltador) { ?>
                                                            <option value="<?php echo $faciltador['id']; ?>"><?php echo $faciltador['nome']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div> 
                                            </div>
                                        </div>

                                        <!--Aqui ira começar a parte toda do paineeeeeel-->

                                        <div class="col-md-12" >
                                            <br />
                                            <div class="col-md-10 pull-right" >
                                                <div class="form-group">
                                                    <!--aqui começa o paineeeeeeeeeeeeeeeeeeeeeel -->
                                                    <div id="playlistTable" class="panel panel-default">
                                                        <div class="panel-heading">Rodada #1 (ou Rodada única/recorrente)</div>
                                                        <div class="panel-body">
                                                            <!--aqui termina a primeira parte do paineeeeel -->
                                                            <div class="col-md-12">
                                                                <div class="col-sm-6 col-lg-9" >
                                                                    <div class="form-group">
                                                                        <label for="inputEmail" class="col-md-3 control-label">Objetivo</label>
                                                                        <div class="col-md-9 pull-right">
                                                                            <input type="text" class="form-control " id="data[Rodada][0][objetivo]" name="data[Rodada][0][objetivo]" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <br/>
                                                                <div class="col-sm-6 col-lg-9" >
                                                                    <div class="form-group">
                                                                        <label for="inputEmail" class="col-md-3 control-label">Pista/Dica</label>
                                                                        <div class="col-md-9 pull-right">
                                                                            <input type="text" class="form-control " id="data[Rodada][0][pistaDica]" name="data[Rodada][0][pistaDica]" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="col-sm-6 col-lg-9" >
                                                                    <div class="form-group">
                                                                        <label for="inputEmail" class="col-md-3 control-label">Imagem</label>
                                                                        <div class="col-md-9 pull-right">
                                                                            <a href="#" class="ico-search">clique aqui para importar outra imagem</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="col-sm-6 col-lg-9" >

                                                                    <label for="inputEmail" class="col-md-3 control-label">Tempo</label>
                                                                    <div class="col-md-9 pull-right">
                                                                        <input type="text" name="data[Rodada][0][tempo]" id="data[Rodada][0][tempo]" size="2" maxlength="8" placeholder="" /> <small>segundos (deixe em branco para indefinido)</small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 ">
                                                                <div class="col-dm-12" >
                                                                    <div class = "checbox checboxcontainer col-md-5" >
                                                                        <input type="radio"  value="nome" checked> Objetos específicos
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <!--Aqui começa a tabela dentro da Panel-->
                                                            <div class="col-md-12">
                                                                <div class="col-sm-6 col-lg-12 corpotabobjetos">
                                                                    <div class="table-responsive">
                                                                        <table class="tablesorter">
                                                                            <thead>

                                                                                <tr>
                                                                                    <th>Objetos</th>
                                                                                    <th>Categorias</th>
                                                                                    <th>Pontos</th>
                                                                                    <!-- <th style="border-width: thin; border-style: solid; border-color: black;">Personagem</th> -->
                                                                                    <th><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                                <?php foreach ($objetosPrograma as $objeto) {
                                                                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                                                                    <tr>
                                                                                        <td><?php echo $objeto['objDescricao']; ?></td>
                                                                                        <td><?php echo $objeto['titulo']; ?></td>
                                                                                        <td><?php echo $objeto['pontuacao_ponto_medio_acima']; ?></td>
                                                                                        <!-- <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objeto['personagem']; ?></td> -->
                                                                                        <td><center><input type="checkbox" name="data[Rodada][0][objetos][]" id="data[Rodada][0][objetos][]" value="<?php echo $objeto['objId']; ?>" /> </center></td>
                                                                                </tr>

                                                                            <?php } ?> <!penultimo passo>

                                                                            </tbody>  
                                                                        </table>
                                                                    </div>
                                                                </div>				<!--Aqui termina a tabela dentro da Panel-->

                                                                <div class="col-md-12">
                                                                    <br />
                                                                    <div class="col-md-12" >
                                                                        <div class="checbox checboxcontainer col-md-4">
                                                                            <input type="radio"  value="nome" checked> Objetos aleatórios
                                                                        </div> 
                                                                        <div class="col-md-6">

                                                                            <select class="col-md-12"  name="data[Rodada][0][objetoCategoria]" id="data[Rodada][0][objetoCategoria]">
                                                                                <option value="0">Selecione a Categoria</option>
                                                                                <?php foreach ($tiposobjeto as $tipo) { ?>
                                                                                    <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['titulo']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div> 
                                                                    </div>   
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <label for="inputEmail" class="col-md-3 control-label">Mensagem Parabéns</label>
                                                                    <div class="col-md-9 pull-right">
                                                                        <input type="text" name="data[Rodada][0][mensagemParabens]"  id="data[Rodada][0][mensagemParabens]" class="form-control " placeholder="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- começa a parte final do painel-->
                                                        <table id="playlistTablePrograma" class="panel-footer" >
                                                            <div class="panel-footer" id="playlistTableFooter" >Etapa 2 
                                                                <div class="col-md-2 pull-right adiciona"><button onclick="AddTableRowPrograma()" type="button"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true">
                                                                        </span></button>
                                                                </div>
                                                        </table>
                                                    </div>
                                                    <!--aqui termina o paineeeeeeeeeeeeeeeeeeeeeel -->

                                                </div>

                                            </div>
                                        </div>
                                        <!--Aqui termina apret toda do paineeeeeeeel-->

                                        <div class="col-md-10">
                                            <div class="col-sm-6 col-lg-12">

                                                <label for="inputEmail" class="col-md-1">Pontuação</label>
                                                <div class = "checbox checboxcontainer col-md-5">
                                                    <div class="col-md-10 pull-right"> <input type="radio" id="pontuacao" name="pontuacao" value="1"> <small>Acumula a cada rodada</small></div>
                                                </div> 
                                                <div class = "checbox checboxcontainer col-md-5">
                                                    <div class="col-md-12 pull-right score"> <input type="checkbox" id="scoregeral" name="scoregeral" value="0"><small>Não somar pontos ao score geral da Empresa</small></div>
                                                </div> 

                                            </div>
                                        </div>


                                        <div class="col-md-10">
                                            <div class="col-sm-6 col-lg-12">
                                                <label for="inputEmail" class="col-md-1"></label>
                                                <div class = "checbox checboxcontainer col-md-5">
                                                    <div class="col-md-10 pull-right"> <input type="radio" id="pontuacao" name="pontuacao" value="1"> <small>Zera a cada rodada</small></div>
                                                </div> 

                                            </div>
                                        </div>
                                        <div class="jumbotron col-md-12">
                                            <!-- COmeça aqui a Parte final do da parte cinza-->

                                            <div class="col-md-12"> <br/>
                                                <label for="inputEmail" class="col-md-2 control-label">Premiação</label>
                                                <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                                    <input type="radio"  value="premiacaoindividual" id="premiacaoindividual" name="tipoPremicao" checked><small>Individual</small>
                                                </div> 

                                                <div class="col-md-5">
                                                    <a href="#" class="ico-search"> <small>Prêmios definidos.Clique aqui para alterar</small></a>
                                                </div>
                                            </div>

                                            <div class="col-md-12"> 
                                                <label for="inputEmail" class="col-md-2 control-label"></label>
                                                <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                                    <input type="radio" value="premiacaoequipe" name="tipoPremicao" id="premiacaoequipe"><small> Equipe</small>
                                                </div> 
                                                <div class="col-md-5 ">
                                                    <a href="#" class="ico-search"><small> Defenir prêmios</small></a>
                                                </div>
                                            </div>

                                            <div class="col-md-12"> 
                                                <label for="inputEmail" class="col-md-2 control-label"></label>
                                                <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                                    <input type="radio" id="premiacaotodos" name="tipoPremicao" value="premiacaotodos"> <small>Todos</small>
                                                </div> 

                                                <div class="col-md-5">
                                                    <select class="text-center col-md-12" id="selecionepremio" name="selecionepremio">
                                                        <option value="0">Selecione o Premio</option>
                                                        <?php
                                                        foreach ($premios as $premio) {
                                                            if ($premio['status'] == 1) {
                                                                ?>
                                                                <option value="<?php echo $premio['premioId']; ?>"><?php echo $premio['nome']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div> 
                                            </div>


                                            <div class="col-md-12"> <br/>

                                                <label for="inputEmail" class="col-md-2 control-label"><small>Mensagem Parabéns</small></label>
                                                <div class="col-md-8 pull-right">
                                                    <input type="text" class="form-control " id="mensagemparabens" name="mensagemparabens" placeholder="">
                                                    <br/>
                                                </div>

                                            </div>

                                            <div class="col-md-12"> <br/>
                                                <label for="inputEmail" class="col-md-2 control-label"><small>Pontos extras</small></label>
                                                <div class="col-md-8 ">
                                                    <input type="number" name="pontosextras" id="pontosextras"  size="10" maxlength="10" class="col-md-3  pontos-do-item-cadastrado"> 

                                                    <div class = "checbox checboxcontainer col-md-9  pull-right">
                                                        <input type="checkbox" id="premiaequipes" name="premiaequipes" value="nome"><small> Premia as Equipes que o usuário/jogador faz parte</small>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--codigo faz parte da chamada para o código (cadastrarprograma.js)-->
                                    <input type="hidden" name="status" id="status"/>
                                    <!--fim do codigo da chamada de java script-->

                                    <!-- rodape -->
                                    <div class="col-md-12 row">
                                        <button type="submit" class="btn btn-deafult pull-right btnazul">Salvar</button>
                                        <button typr="button" class="btn btn-deafult pull-right">Cancelar</button>
                                        <br/><br /><br />
                                    </div> 
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-lg hide" data-toggle="modal" data-target="#myModalJogadores" id="showModalJogadores">
                                        Launch demo modal
                                    </button>

                                    <button type="button" class="btn btn-primary btn-lg hide" data-toggle="modal" data-target="#myModalEquipes" id="showModalEquipes">
                                        Launch demo modal
                                    </button>
                                    <button type="button" class="btn btn-primary btn-lg hidden" data-toggle="modal" data-target="#myModalPersonagens" id="showModalPersonagens">
                                        Launch demo modal
                                    </button>
                                </div>

                                <!-- Modal JOGADORES-->
                                <div class="modal fade" id="myModalJogadores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                                    <div class="modal-dialog" role="document" style="z-index: 999999999;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Selecione o jogador</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <table class="tablesorter">
                                                        <thead>
                                                            <tr>
                                                                <th>Jogador</th>
                                                                <th>Cargo</th>
                                                                <th>Departamento</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            foreach ($jogadores as $jogador) {
                                                                if ($jogador['status'] == 1) {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $jogador['nome']; ?></td>
                                                                        <td><?php echo $jogador['cargo']; ?></td>
                                                                        <td><?php echo $jogador['departamento']; ?></td>
                                                                        <td><input type="checkbox" id="jogadoresParticipantes[]" name="jogadoresParticipantes[]" value="<?php echo $jogador['id']; ?>"/></td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- MODAL EQUIPES -->
                                <div class="modal fade" id="myModalEquipes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                                    <div class="modal-dialog" role="document" style="z-index: 999999999;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Selecione Equipe</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <table class="tablesorter">
                                                        <thead>
                                                            <tr>
                                                                <th>Equipe</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            foreach ($equipes as $equipe) {
                                                                if ($equipe['status'] == 1 && $equipe['equipenome'] != '') {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $equipe['equipenome']; ?></td>
                                                                        <td><input type="checkbox" id="equipesParticipantes[]" name="equipesParticipantes[]" value="<?php echo $equipe['id']; ?>"/></td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- MODAL EQUIPES -->
                                <div class="modal fade" id="myModalPersonagens" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                                    <div class="modal-dialog" role="document" style="z-index: 999999999;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Adicione os Personagens</h4>
                                            </div>
                                            <div class="modal-body">

                                                <table class="tablesorter" id="tabelaSelecaoPersonagens">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="3">
                                                                <button class="btn btn-default pull-right" id="morePersonagem" type="button"><span class="glyphicon glyphicon-plus"></span></button>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nome</th>
                                                            <th>Qtd. Máx</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>0</td>
                                                            <td><input type="text" class="form-control" id="data[Personagens][0][nome]" name="data[Personagens][0][nome]" /></td>
                                                            <td><input type="text" class="form-control" id="data[Personagens][0][quantidade]" name="data[Personagens][0][quantidade]" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div>
                                    <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                                    <button class="btn btn-deafult pull-right">Cancelar</button>
                                </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

    <div class="modal fade" id="lista-premios-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="z-index: 9999;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Prêmios</h4>
      </div>
      <div class="modal-body">
          <div id="recebe-table-premios"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
    
<button type="button" class="btn btn-info btn-lg hide" data-toggle="modal" data-target="#programa-modal" id="btnAbreModal_PROGRAMA">Open Modal</button>
