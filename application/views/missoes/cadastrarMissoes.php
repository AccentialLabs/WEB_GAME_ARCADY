<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<link href="../../assets/css/cadastrar-missoes.css" rel="stylesheet"/>

<script src="../../assets/js/views/cadastrarMissoes.js"></script> 

<!--script para adicionar uma linha-->

<script type='text/javascript'>
<?php
//$php_array = array('abc','def','ghi');
$php_array = $objetos;
$js_array = json_encode($php_array);
echo "var javascript_array = " . $js_array . "; \n";
?>
</script>

<script>
    (function($) {



        var contador = 1;
       

        AddTableRow = function() {


            var tabelaIni = ' <div class="col-sm-6 col-lg-12 corpotabobjetos" ><div class="table-responsive"><table class="tablesorter table table-hover">' +
                    '<thead><tr><th>Selecione os Objetos</th><th>Categorias</th><th></th></tr>' +
                    '</thead><tbody>';

           var tabelaMed = '';
            for (i = 0; i < javascript_array.length; i++) {
                console.log(javascript_array[i]);
                
                tabelaMed += '<tr><td>'+javascript_array[i].descricao+'</td><td class="text-center">'+javascript_array[i].titulo+'</td><td>'+
                        '<input type="checkbox" name="data[Etapa]['+contador+'][objetos][]" id="data[Etapa]['+contador+'][objetos][]" value="'+javascript_array[i].id+'" /> </td></tr>';
            }

            var tabelaFim = '</tbody></table></div></div>';
            
            var tabelaObjetos = tabelaIni+tabelaMed+tabelaFim;
            
             var rodada = '<div class="panel-body">'+tabelaObjetos+'<div class="col-md-12" style="padding-top: 10px; padding-bottom: 10px;"><div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Dica de tela</label><div class="col-md-7"><input type="text" class="form-control col-md-12" name="data[Etapa][' + contador + '][dicatela][]" id="data[Etapa][' + contador + '][dicatela][]" placeholder=""></div></div></div><div class="col-md-12">' +
                '<div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Imagem</label><div class="col-md-7 "><a href="#" class="ico-search"><small>clique aqui para importar outra imagem</small></a></div></div>' +
                '</div><div class="col-md-12" style="padding-bottom: 10px;"><div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Data limite</label><div class="col-md-2 "><input  type="date"  name="data[Etapa][' + contador + '][datalimite][]" id="data[Etapa][' + contador + '][datalimite][]" value=" " class= "form-control textbox70"/></div></div></div>' +
                '<div class="col-md-12" style="padding-bottom: 10px;"><div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Hora limite</label><div class="col-md-1 "><input type="text" class="form-control col-md-4"  name="data[Etapa][' + contador + '][horalimite][]" id="data[Etapa][' + contador + '][horalimite][]" placeholder="00:00"></div></div></div>' +
                '<div class="col-md-12" style="padding-bottom: 10px;"><div class="form-group" ><label for="inputEmail" class="col-md-4 control-label">Mensagem Parabéns</label><div class="col-md-8 pull-right"><input type="text" class="form-control " name="data[Etapa][' + contador + '][mensagemparabens][]" id="data[Etapa][' + contador + '][mensagemparabens][]"  placeholder=""></div></div></div>' +
                '<div class="col-md-12" ><div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Conteúdo destravado</label><div class="col-md-7 "><a href="#" class="ico-search"><small>Clique aquí para importar conteúdo</small></a></div></div></div></div> ';

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
<!--FIM do script para adicionar uma linha-->

</head>
<body>
    <form method="post" action="../missoes/createMissoes">  
        <!--antepenultimo passo-->

        <!--antepenultimo passo para mostrar na tela se funciona-->

        <!--container-->
        <div class="col-md-10  container-style ">
            <div id="page-content" class="margembranca "> 

                <div class="col-md-12" >

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Missão</label>

                                <div class="col-md-8 pull-right">
                                    <input type="text" id="missao" name="missao" class="form-control"  placeholder="">
                                    <br/>
                                </div>
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
                        <div class="col-md-11" >

                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label"  >Vigência</label>
                                <div class="col-md-3" style="padding-left: 0px;">
                                    <input type="date" id="datainicio" name="datainicio" class="form-control col-md-10 pull-left" />
                                    <label for="datainicio" class="col-md-1">a</label>
                                </div>

                                <div class="col-md-3">
                                    <input type="date"  id="datatermino"  name="datatermino" value=" " class="col-md-10 form-control"/>
                                    <label for="datainicio" class="col-md-1">das</label>
                                </div>

                                <div class="col-md-2" >
                                    <input type="text" id="horainicio" name="horainicio" class="form-controls col-md-8" placeholder="00:00">
                                    <label for="datainicio" class="col-md-1">às</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="text" id="horatermino" name="horatermino" class="form-controls col-md-10" placeholder="00:00"> 
                                </div>
                            </div>

                        </div>
                    </div>


                    <!--FIM Linha da Agência -->
                    <br/><br/>
                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-10" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe">Etapas</label>
                                <div class="col-md-9 " style="padding-top: 20px;">
                                    <!--aqui começa o paineeeeeeeeeeeeeeeeeeeeeel -->
                                    <div id="playlistTable" class="panel panel-default">
                                        <div class="panel-heading">Rodada #1 (ou Rodada única/recorrente)</div>
                                        <div class="panel-body">
                                            <!--aqui termina a primeira parte do paineeeeel -->

                                            <!--Aqui começa a tabela dentro da Panel-->
                                            <div class="col-md-12">
                                                <div class="col-sm-6 col-lg-12 corpotabobjetos" >
                                                    <div class="table-responsive">
                                                        <table class="tablesorter table table-hover">
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
                                                            <input type="text" class="form-control col-md-4"  name="data[Etapa][0][horalimite][]" id="data[Etapa][0][horalimite][]" placeholder="00:00">
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
                                        <table id="playlistTable" class="panel-footer" >
                                            <div class="panel-footer" >
                                                <?php $json = json_encode($objetos); ?>
                                                <div class="col-md-2 pull-right adiciona"><button onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true">
                                                        </span></button> </div></div>
                                        </table>
                                        <!-- Fim botão de adicoanar linhas(+)-->
                                    </div>
                                    <!--aqui termina o paineeeeeeeeeeeeeeeeeeeeeel -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Para quem</label>
                                <div class = "checbox checboxcontainer">
                                    <input type="radio" id="usuariojogadores" name="usuariojogadores"  value="1"> Todos os Usuários/Jogadores cadastrado
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer">
                                    <input type="radio" id="somenteequipe" name="somenteequipe"  value="0">  Somente a(s) Equipes(s)
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div id="Layer1" class="col-md-11 corpotabequipes"> 
                        <div class="col-sm-6 col-lg-10 pull-right">
                            <div class="table-responsive">
                                <table class="tablesorter table table-hover">
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
                    </div>

                    <div class="col-sm-6 col-lg-5">
                        <div class="col-md-8 pull-right ">
                            <div class = "checbox checboxcontainer">
                                <input type="checkbox" id="manualmente" name="manualmente" value="1"  data-toggle="modal" data-target="#myModal">  Definir manualmente
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-6" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Dica de tela</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="dicatela" name="dicatela" class="form-control " placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-6" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Mensagem Parabéns</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="msgparabens" name="msgparabens" class="form-control" placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Texto p/Log</label>
                                <div class="col-md-3">
                                    O usuário/jogador"Fulano"

                                </div>
                                <div class="col-md-4 verbocx">
                                    <input type="text" id="textlog" name="textlog" size="15" maxlength="8" placeholder="entre com um verbo"> a "Ação"
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--FIM margem branca-->
            <input type="hidden" name="status" id="status"/>
            <!-- rodape -->
            <div>
                <button type="submit" class="btn btn-primary pull-right btnazul">Salvar e criar Reconhecimento</button>
                <button class="btn btn-primary pull-right btnazul">Salvar</button>
                <button class="btn btn-deafult pull-right">Cancelar</button>
            </div> 

        </div>
        
        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox"  class="statusCheckboxEquipes" name="jogadoresMissoes[]" value="<?php echo $jogador['id']; ?>" /> </center></td>

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
        
    </form>
</body>

<!--FIM container-->