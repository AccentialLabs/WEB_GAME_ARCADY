<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--Inserçãode dados com as telas (cadastraobjetos_model;cadastraobjetoEntity,Controller Objetos)-->

<head>

    <link href="../../assets/css/cadastrar-objetos.css" rel="stylesheet"/>
    <script src="../../assets/js/views/ajax/cadastrarObjetosAjax.js"></script>


    <script>
        (function($) {

        })(jQuery);

    </script>
</head>
<body>
    <form  method="post" action="../objetos/cadObjeto" >

        <!--container-->
        <div class="col-md-10  container-style" id="elemento1">
            <div id="page-content" class="margembranca"> 

                <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
                    <span>
                        <div class="alert alert-success" role="alert">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            <?php echo $this->session->flashdata('cadSucesso'); ?>
                        </div>
                    </span>
                <?php } ?>

                <div class="col-md-12" id="elemento1">

                    <div class="col-sm-6 col-lg-8" id="elemento1">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label" id="elemento1">Categoria</label>
                            <div class="col-md-5">
                                <select class="col-md-4 form-control" id="categoria" name="categoria">
                                    <option value="1">Selecione a Categoria</option>
                                    <?php foreach ($tiposobjeto as $tipo) { ?>
                                        <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['titulo']; ?></option>
                                    <?php } ?>
                                </select>
                            </div> <br/>
                        </div><br/>
                    </div>

                    <div class="col-sm-6 col-lg-8" id="elemento1">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label"id="elemento1">Pergunta</label>
                            <div class="col-md-8">
                                <input type="text" id="pergunta" name="descricao" class="form-control "placeholder="">
                                <br/>
                            </div>
                        </div>
                    </div>

               
                    </div>

                    <div class="col-sm-6 col-lg-8" id="elemento1">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control1-labe" id="elemento1">Resposta</label>
                            <div class="col-md-8">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"> Descritiva
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10" id="elemento1">
                        <div class="col-md-10 pull-right" id="divQtdMinCaracteres" >
                            <label for="inputEmail" class="col-md-3 control1-labe" id="elemento1">Qtd. min. caracteres </label>
                            <div class="col-md-2" id="elemento1">
                                <input type="number" id="qtdcaracteres" name="descritiva_min_caracter" class="form-control "placeholder="">  
                            </div>
                            <label for="inputEmail" class="col-md-3 text-center control1-labe"><small>Deixe em branco se não houver mínimo</small></label>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10" id="elemento1">
                        <div class="col-md-10 pull-right" id="divQtdPontos">
                            <label for="inputEmail" class="col-md-3 control1-labe" id="elemento1">Pontos</label>
                            <div class="col-md-2" id="elemento1">
                                <input type="number" id="qtdpontos" name="descritiva_pontos" class="form-control "placeholder="">  
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-8" id="elemento1">
                        <div class="col-md-2">
                        </div>
                        <div class = "checbox checboxcontainer col-md-3">
                            <input type="radio" id="alternativas" name="tipo_resposta" value="ALTERNATIVA"> Alternativas
                        </div> 
                    </div>

                    <div class="col-sm-6 col-lg-10">
                        <br/>
                        <div class="col-md-10 pull-right" id="divAlternativasTable">
                            <table id="playlistTable" class="table table-hover col-md-10">
                                <thead>
                                    <tr>
                                        <th >#</th>
                                        <th>Resposta</th>
                                        <th><center>Certa</center></th>
                                <th >Ganha/Perde</th>
                                <th >Pontos</th>
                                <th ><center><input type="checkbox" name="opcoes" value="html"/></center></th>
                                </tr>
                                </thead>


                                <!--  <?php foreach ($objetoss as $objetoss) {
                                        ?>  -->

                                    <tbody>
                                        <tr>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['pontos']; ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['resposta']; ?></td>
                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"checked /></center></th>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['ganharperder']; ?></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><center> <span  class = "glyphicon glyphicon-ban-circle"></span> </center> </td>
                                    </tr>  

                                    <!--      <?php } ?>      -->

                                </tbody>
                            </table>

                            <!--esse aqui é o botãoque adiciona linhas-->
                            <div class="col-md-2">
                                <button onclick="AddTableRow()" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus col-md-1" aria-hidden="true"></span></button>
                            </div>
                            <!--FIM esse aqui é o botãoque adiciona linhas--> <br/>
                        </div>
                    </div> 


                    <div class="col-sm-6 col-lg-10" id="divAlternativasShowRespostas">
                        <br/> <br/>
                        <div class="col-md-10 pull-right" id="elemento1"
                             <div class = "checbox checboxcontainer col-md-2" id="elemento1" >
                                <input type="checkbox" id="respcorreta" name="mostrar_resposta_correta" value="1"> Mostrar resposta(s) correta(s) 
                            </div> 
                        </div>

                        <div class="col-sm-6 col-lg-10" id="elemento1"><br/>
                            <div class="col-md-10 pull-right" id="divAlternativasNumTentativas">
                                <label for="inputEmail" class="col-md-3 control1-labe" id="elemento1">Numero de tentativas</label>
                                <div class="col-md-2" id="elemento1">
                                    <input type="number" id="numtentativas" name="numero_tentativa" class="form-control text-center" placeholder="" value="1">  
                                </div>
                                <label for="inputEmail" class="col-md-3 text-center control1-labe"><small>Mínimo1 vez</small></label>
                            </div>
                        </div>
                        <br/>
                        <div class="col-sm-6 col-lg-10" id="elemento1">
                            <div class="col-md-10 pull-right" id="divAlternativasLimitTempo">
                                <label for="inputEmail" class="col-md-3 control1-labe" id="elemento1">Limite de tempo (seg.)</label>
                                <div class="col-md-2" id="elemento1">
                                    <input type="number" id="limittempo" name="limite_tempo" class="form-control "placeholder="">  
                                </div>
                                <label for="inputEmail" class="col-md-3 text-center control1-labe"><small>Deixe em branco se não houver limite</small></label>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-8" id="elemento1">
                            <div class="col-md-2">
                            </div>
                            <div class = "checbox checboxcontainer col-md-3">
                                <input type="radio" id="escala" name="escala"  value="1">  Escala
                            </div> 
                        </div>


                        <div class="col-sm-6 col-lg-10"id="elemento1"><br/>

                            <div class="col-md-10 pull-right" id="elemento1">
                                <div class="col-md-4" id="elemento1">
                                    <label for="inputEmail" class="col-md-6 control1-labe" id="elemento1">Valor inicial/min.<br/><small><small>(ex.: ruim, péssimo, etc)</small></small></label>
                                    <div class="col-md-5" id="elemento1">
                                        <input type="number" id="valorinicial" name="escala_valor_inicial" class="form-control "placeholder="">  
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail" class="col-md-6 control1-labe">Incremento</label>
                                    <div class="col-md-4" id="elemento1">
                                        <input type="number" id="incremento" name="escala_incremento" class="form-control "placeholder="">  
                                    </div>
                                </div>

                                <div class="col-md-4" id="elemento1" >
                                    <label for="inputEmail" class="col-md-6 control1-labe" id="elemento1">Valor final/máx.<br /><small><small>(ex.: bom, ótimo, etc)</small></small></label>
                                    <div class="col-md-5" id="elemento1">
                                        <input type="number" id="valorfinal" name="escala_valor_final" class="form-control "placeholder="">  
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- começo do ponto médio 
                        <div class=" col-md-12"> 
                            <div class="col-md-6 col-lg-10 pull-right">
                                <div class="col-md-8">
                                    <input type="text" name="qtd." size="8" maxlength="8" id="qtd." placeholder=" Label incial"> 
                                </div>
                                <div class="col-md-2">
                                    <input type="text" name="qtd." size="8" maxlength="8" id="qtd." placeholder=" Label final"> 
                                </div>
                            </div>
                        </div>
                        Fim  do ponto médio-->


                        <div class="col-sm-6 col-lg-10" id="elemento1"><br/>
                            <div class="col-md-2">
                            </div>
                            <div class = "checbox checboxcontainer col-md-4" id="elemento1">
                                <input type="radio" id="pontmedio" name="pontuacao_ponto_medio"  value="1"> Pontuação por Ponto Médio 
                            </div> 

                            <div class="col-md-3" id="elemento1">
                                <label for="inputEmail" class="col-md-5 control1-labe" id="elemento1">Abaixo</label>
                                <div class="col-md-5" id="elemento1">
                                    <input type="number" id="qtd." name="pontuacao_ponto_medio_abaixo" class="form-control "placeholder="">  
                                </div>
                                <div class="pull-right">
                                    <big><big> <big>  | </big> </big> </big>
                                </div>
                            </div>

                            <div class="col-md-3"id="elemento1">
                                <div class="col-md-6" >
                                    <input type="number" id="qtd." name="pontuacao_ponto_medio_acima" class="form-control "placeholder="">  
                                </div>
                                <label for="inputEmail" class="col-md-6 control1-labe pull-right" id="elemento1">Acima</label>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-10" id="elemento1">
                            <div class="col-md-2">
                            </div>
                            <div class = "checbox checboxcontainer col-md-4" id="elemento1">
                                <input type="radio" id="pontescala" name="pontuacao_conforme_escala" value="1"> Pontuação conforme Escala 
                            </div> 
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-8" id="elemento1"><br/>
                        <div class="col-md-2">
                        </div>
                        <div class = "checbox checboxcontainer col-md-3">
                            <input type="radio" id="interacaofisicareal" name="intersecao_fisica" value="1">  Interção física/real
                        </div> 
                    </div>

                    <div class="col-sm-6 col-lg-10" id="elemento1"> <br/>
                        <div class="col-md-10 pull-right" id="elemento1">
                            <label for="inputEmail" class="col-md-1 control1-labe" id="elemento1">Resposta</label>
                            <div class="col-md-7" >
                                <input type="varchar" id="resposta" name="intersecao_fisica_resposta" class="form-control " placeholder=""> 
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10" id="elemento1"> <br/>
                        <div class="col-md-10 pull-right" id="elemento1">
                            <label for="inputEmail" class="col-md-1 control1-labe" id="elemento1">Pontos</label>
                            <div class="col-md-2" >
                                <input type="number" d="pontos" name="intersecao_fisica_pontos" class="form-control " placeholder=""> 
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-lg-10" id="elemento1"><br/>
                        <div class="col-md-2">
                        </div>
                        <div class = "checbox checboxcontainer col-md-4" id="elemento1">
                            <input type="checkbox" idid="habiiitaqr" name="habilita_qrcode" value="1"> Habilita QR-Code Reader
                        </div> 
                    </div>
                </div>

                <div class="col-sm-6 col-lg-8" id="elemento1"><br/>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label"id="elemento1">Ícone</label>
                        <div class="col-md-8 ">
                            <a href="#" class="ico-search">Clique aqui para importar outra imagem</a>
                        </div>
                        <br/>
                    </div>
                </div>

                <input type="hidden" name="contadorRespostas" id="contadorRespostas" />

                <div class="col-md-11 button-box">
                    <button type="button" class="btn btn-primary pull-right btnazul">Salvar e criar Ação</button>
                    <button class="btn btn-deafult pull-right btnazul">Salvar</button>
                    <button class="btn btn-deafult pull-right">Cancelar</button>
                </div> 
            </div> 

            <!-- rodape -->
    </form>
</body>
</html>

<!--FIM container-->