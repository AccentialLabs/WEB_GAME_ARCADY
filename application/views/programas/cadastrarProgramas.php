<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="../../assets/css/cadastrar-programas.css" rel="stylesheet"/>
<script src="../../assets/js/views/cadastrarPrograma.js"></script> 

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
?>
</script>

<script>
    (function($) {

        var contador = 1;

        AddTableRow = function() {

            $("#playlistTableFooter").fadeOut(0);

            var parteInicial = '<div class="col-md-12"><div class="col-sm-6 col-lg-9" ><div class="form-group"><label for="inputEmail" class="col-md-3 control-label">Objetivo</label><div class="col-md-9 pull-right"><input type="text" class="form-control " name="data[Rodada][' + contador + '][objetivo]" id="data[Rodada][' + contador + '][objetivo]" placeholder=""></div></div></div></div>' +
                    '<div class="col-md-12"><br/><div class="col-sm-6 col-lg-9" ><div class="form-group"><label for="inputEmail" class="col-md-3 control-label">Pista/Dica</label><div class="col-md-9 pull-right"><input type="text" class="form-control " name="data[Rodada][' + contador + '][pistaDica]" id="data[Rodada][' + contador + '][pistaDica]" placeholder=""></div></div></div></div>' +
                    '<div class="col-md-12"><div class="col-sm-6 col-lg-9" ><div class="form-group"><label for="inputEmail" class="col-md-3 control-label">Imagem</label><div class="col-md-9 pull-right"><a href="#" class="ico-search">clique aqui para importar outra imagem</a></div></div></div></div>' +
                    '<div class="col-md-12"><div class="col-sm-6 col-lg-9" ><label for="inputEmail" class="col-md-3 control-label">Tempo</label><div class="col-md-9 pull-right"><input type="text"  size="2" maxlength="8" name="data[Rodada][' + contador + '][tempo]" id="data[Rodada][' + contador + '][tempo]"/> <small>segundos (deixe em branco para indefinido)</small></div></div></div>' +
                    '<div class="col-md-12 "><div class="col-dm-12" ><div class = "checbox checboxcontainer col-md-5" ><input type="radio"  value="nome" checked> Objetos específicos</div></div></div>';

            /**
             * TABELA DE OBJETOS
             * @type String
             */
            var tabelaIni = ' <div class="col-sm-6 col-lg-12 corpotabobjetos" ><div class="table-responsive"><table class="tablesorter table table-hover">' +
                    '<thead><tr><th>Selecione os Objetos</th><th>Categorias</th><th>Pontos</th><th></th></tr>' +
                    '</thead><tbody>';
            var tabelaMed = '';
            for (i = 0; i < javascript_array.length; i++) {
                console.log(javascript_array[i]);
                tabelaMed += '<tr><td>' + javascript_array[i].descricao + '</td><td class="text-center">' + javascript_array[i].titulo + '</td><td class="text-center">' + javascript_array[i].pontuacao_ponto_medio_acima + '</td><td>' +
                        '<input type="checkbox" name="data[Rodada][' + contador + '][objetos][]" id="data[Rodada][' + contador + '][objetos][]" value="' + javascript_array[i].id + '" /> </td></tr>';
            }
            var tabelaFim = '</tbody></table></div></div>';
            var tabelaObjetos = tabelaIni + tabelaMed + tabelaFim;
            //FIM DA TABELA DE OBJETOS



            /**
             * SELECT - CATEGORIA DE OBJETOS
             */
            var optionsFromSelect = '';
            for (l = 0; l < js_tipocategoria_array.length; l++) {

                optionsFromSelect += '<option id="' + js_tipocategoria_array[l].id + '">' + js_tipocategoria_array[l].titulo + '</option>';
            }
            //FIM DO SELECT - CATEGORIA DE OBJETOS


            var parteFinal = ' <div class="col-md-12"><br /><div class="col-md-12" ><div class="checbox checboxcontainer col-md-4"><input type="radio"  value="nome" checked> Objetos aleatórios</div><div class="col-md-6"><select class="col-md-12" name="data[Rodada][' + contador + '][objetoCategoria]" id="data[Rodada][' + contador + '][objetoCategoria]"><option>Selecione a Categoria</option>' + optionsFromSelect + '</select></div></div></div>' +
                    '<div class="col-md-12"><div class="col-md-12"><label for="inputEmail" class="col-md-3 control-label">Mensagem Parabéns</label><div class="col-md-9 pull-right"><input type="text" class="form-control "name="data[Rodada][' + contador + '][mensagemParabens]" id="data[Rodada][' + contador + '][mensagemParabens]" placeholder=""></div></div></div>';

            var rodada = '<div class="panel-body">' + parteInicial + tabelaObjetos + parteFinal + '</div></div></div></div>';

            var newRow = $("<div class='panel-footer'>");
            var cols = '<div class="panel-heading">Rodada #' + (contador + 1) + ' (ou Rodada única/recorrente) <button onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span></button></div>' + rodada;
            cols += '<div class="panel-footer">&nbsp </div>';

            // newRow.append(cols);
            $("#playlistTable").append(cols);
            contador++;
            return false;
        };
    })(jQuery);
</script>

<body>

    <form  method="post" action="../programas/createPrograma">
        <!--container-->
        <div class="col-md-10 container-style ">
            <div id="page-content" class="margembranca "> 

                <div class="col-md-12" >

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >

                            <label for="inputEmail" class="col-md-2 control-label">Programa</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" name="nome" id="nome" class="form-control "  placeholder="">
                                <br/>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-1 pull-right celular">
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>

                    <!--Linha da Agência -->
                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Vigência</label>
                            <div class="col-md-3">
                                <input  type="date"  id="datainicio" name="datainicio" value=" " class= "textbox70"/>

                                <div class="col-md-1 textpos">
                                    <p>a</p>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <input type="date"  id="datatermino" name="datatermino" value=" " class= "textbox70"/>
                                <div class="col-md-1 textpos">
                                    <p>das</p>
                                </div>
                            </div>

                            <div class="col-md-2 ">
                                <input type="text" id="horainicio" name="horainicio" class="form-control" placeholder="00:00">
                                <div class="col-md-4 textpos1">
                                    <p>ás</p>
                                </div>
                            </div>

                            <div class="col-md-2 mudar">
                                <input type="text" id="horatermino" name="horatermino" class="form-control " placeholder="00:00"> 
                            </div>


                        </div>
                    </div>
                    <!--FIM Linha da Agência -->

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >

                            <label for="inputEmail" class="col-md-2 control-label">Objetivo</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" id="objetivo" name="objetivo" class="form-control " placeholder="">
                                <br/>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >

                            <label for="inputEmail" class="col-md-2 control-label">Local/Mapa</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" id="localmapa" name="localmapa" class="form-control " placeholder="">
                                <br/>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10 ">
                        <label for="inputEmail" class="col-md-2 control-label"></label>
                        <div class="col-md-4 ">
                            <a href="#" class="ico-search">Link para imagem/mapa</a>
                        </div>
                    </div>
                    <!--Aqui temian a primeira parte da tela ,a parte brancaaaaaaaaa-->
                </div>
                <div class="jumbotron col-md-12">

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label">Participantes</label>
                            <div class = "checbox checboxcontainer col-md-5 pull-rightl">
                                <input type="radio" class="tipoSelecaoParticipantes" id="participantes" name="tipoParticipantes" value="participantes_equipes_existents"> Definir pelas Equipes existentes
                            </div> 
                            <div class="col-md-4 ">
                                <a href="#" class="ico-search"><small>Participantes definidos.Clique para alterar</small></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" class="tipoSelecaoParticipantes" id="participantes" name="tipoParticipantes" value="participantes_manual"> Definir manualmente
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label">Times</label>

                            <div class = "checbox checboxcontainer col-md-5 pull-rightl">
                                <input type="radio" name="tipoTimes"  value="time_sem_time" class="tipoTimes"> Sem Time (individual)
                            </div> 

                            <div class = "checbox checboxcontainer col-md-10 pull-rightl">
                                <input type="radio" name="tipoTimes"  value="time_por_equipes" class="tipoTimes"> Times baseados nas Equipes existentes
                            </div> 

                            <div class = "checbox checboxcontainer col-md-10 pull-right">
                                <input type="radio" name="tipoTimes"  value="time_jogadores_escolhem" class="tipoTimes">  Jogadores escolhem os Times
                            </div> 

                            <div class = "checbox checboxcontainer col-md-10 pull-right ">
                                <input type="radio" name="tipoTimes" value="time_sistema_escolhe" class="tipoTimes">Sistemas escolhe os Times
                                <div class="col-md-8 pull-right" >
                                    <input type="text" name="qtd" placeholder="Qtd." size="4" maxlength="8" id="Qtd." placeholder=""> <small>Jogadores por Time</small>
                                    <div class="col-md-7 pull-right" >
                                        <div class="col-md-12 pull-left" >
                                            <small>Nome Times(prefixo)</small> <input type="text" name="qtd." size="8" maxlength="8" />
                                        </div>

                                    </div>
                                </div>

                            </div> 

                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label">Personagens</label>
                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="radio" name="temPersonagens" value="nao" class="temPersonagens"> Não (único)
                            </div> 

                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="radio" name="temPersonagens"  value="sim" class="temPersonagens"> Sim
                            </div> 

                            <div class="col-md-5 ">
                                <a href="#" class="ico-search"> Participantes definidos.Clique para alterar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10">
                            <div class="col-md-6 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="checkbox"  value="nome"> Jogadores escolhem os Personagens a cada rodada
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

                <!--Aqui temina a segunda parte da tela ,a parte cinzaaaaa-->

                <div class="col-md-6"> 
                    <div class="col-md-12 col-lg-12" ><br/>
                        <label for="inputEmail" class="col-md-2 control-label">Rodadas</label>
                        <div class="col-md-8 pull-right">
                            <input type="text" name="rodadasvezes" id="rodadasvezes" size="2" maxlength="8" placeholder="02" class="col-md-2 input-no-padding" /> <small> vezes (deixe em branco para indefinido)</small>
                        </div> 
                    </div>
                </div>

                <div class="col-md-6"> 
                    <div class="col-md-12"><br/>
                        <div class = "checbox checboxcontainer col-md-12">
                            <input type="checkbox" id="rodadasdiferentes" name="rodadasdiferentes" value="0"> <small>Rodadas diferentes (default são rodadas recorrentes/iguais)</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" > <br/>
                    <div class="col-sm-6 col-lg-10">
                        <div class="col-md-10 pull-right">

                            <div>
                                <div class = "checbox checboxcontainer col-md-5" >
                                    <input type="radio" id="automaticarodada" name="rodadas" value="0">  Rodada automática
                                </div>

                                <div class="col-md-7">
                                    a cada <input type="number" name="intervalo" id="intervalo" size="7" maxlength="8" placeholder="" > minutos (intervalo)
                                </div>
                            </div>
                            <br /><br/>
                            <div>
                                <div class = "checbox checboxcontainer col-md-5">
                                    <input type="radio" id="gestorrodada"  value="1" name="rodadas">  Rodada disparada pelo Gestor
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
                </div>

                <div class="col-md-12"> 
                    <div class="col-sm-6 col-lg-10" >
                        <div class="col-md-10 pull-right" >
                            <div class = "checbox checboxcontainer col-md-5" >
                                <input type="radio" id="facilitadorrodada" name="rodadas" value="facilitadorrodada" checked>  Rodada disparada pelo Facilitador
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
                </div>

                <!--Aqui ira começar a parte toda do paineeeeeel-->

                <div class="col-md-12" >
                    <br />
                    <div class="col-sm-6 col-lg-10" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control1-labe"></label>
                            <div class="col-md-9 pull- ">

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

                                                            <?php foreach ($objetos as $objeto) {
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
                                                <div class="col-md-12">
                                                    <label for="inputEmail" class="col-md-3 control-label">Mensagem Parabéns</label>
                                                    <div class="col-md-9 pull-right">
                                                        <input type="text" name="data[Rodada][0][mensagemParabens]"  id="data[Rodada][0][mensagemParabens]" class="form-control " placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- começa a parte final do painel-->
                                    <table id="playlistTable" class="panel-footer" >
                                        <div class="panel-footer" id="playlistTableFooter" >Etapa 2 
                                            <div class="col-md-2 pull-right adiciona"><button onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true">
                                                    </span></button>
                                            </div>
                                    </table>
                                </div>
                                <!--aqui termina o paineeeeeeeeeeeeeeeeeeeeeel -->
                            </div>
                        </div>

                    </div>
                </div>
                <!--Aqui termina apret toda do paineeeeeeeel-->

                <div class="col-md-10">
                    <div class="col-sm-6 col-lg-12">

                        <label for="inputEmail" class="col-md-2"></label>
                        <label for="inputEmail" class="col-md-1">Pontuação</label>
                        <div class = "checbox checboxcontainer col-md-4">
                            <div class="col-md-10 pull-right"> <input type="radio" id="pontuacao" name="pontuacao" value="1"> Acumula a cada rodada</div>
                        </div> 
                        <div class = "checbox checboxcontainer col-md-5">
                            <div class="col-md-12 pull-right score"> <input type="checkbox" id="scoregeral" name="scoregeral" value="0">Não somar pontos ao score geral da Empresa</div>
                        </div> 

                    </div>
                </div>


                <div class="col-md-10">
                    <div class="col-sm-6 col-lg-12">

                        <label for="inputEmail" class="col-md-2"></label>
                        <label for="inputEmail" class="col-md-1"></label>
                        <div class = "checbox checboxcontainer col-md-4">
                            <div class="col-md-10 pull-right"> <input type="radio" id="pontuacao" name="pontuacao" value="1"> Zera a cada rodada</div>
                        </div> 

                    </div>
                </div>
                <div class="jumbotron col-md-12">
                    <!-- COmeça aqui a Parte final do da parte cinza-->

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label">Premiação</label>
                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="radio"  value="premiacaoindividual" id="premiacaoindividual" name="tipoPremicao" checked> Individual
                            </div> 

                            <div class="col-md-5">
                                <a href="#" class="ico-search"> Prêmios definidos.Clique aqui para alterar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label"></label>
                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="radio" value="premiacaoequipe" name="tipoPremicao" id="premiacaoequipe"> Equipe
                            </div> 
                            <div class="col-md-4 ">
                                <a href="#" class="ico-search"> Defenir prêmios</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label"></label>
                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="radio" id="premiacaotodos" name="tipoPremicao" value="premiacaotodos"> Todos
                            </div> 

                            <div class="col-md-4">
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
                    </div>


                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-5" >

                            <label for="inputEmail" class="col-md-2 control-label">Mensagem Parabéns</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" class="form-control " id="mensagemparabens" name="mensagemparabens" placeholder="">
                                <br/>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Pontos extras</label>
                            <div class="col-md-8 ">
                                <input type="number" name="pontosextras" id="pontosextras"  size="10" maxlength="10" class="col-md-3"> 

                                <div class = "checbox checboxcontainer col-md-9  pull-right">
                                    <input type="checkbox" id="premiaequipes" name="premiaequipes" value="nome"><small> Premia as Equipes que o usuário/jogador faz parte</small>
                                </div> 
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
                <button type="button" class="btn btn-primary pull-right btnazul">Salvar e criar Reconhecimentos</button>
                <button type="button" class="btn btn-primary pull-right btnazul">Salvar e enviar convites</button>
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
        <div class="modal fade" id="myModalJogadores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
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
        <div class="modal fade" id="myModalEquipes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
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
        <div class="modal fade" id="myModalPersonagens" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
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

    </form>
</body>


