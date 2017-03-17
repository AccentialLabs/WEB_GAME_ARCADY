<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link href="../../assets/css/cadastrar-acoes.css" rel="stylesheet"/>

<script src="../../assets/js/views/cadastrarAcoes.js"></script> 
<script src="../../assets/js/views/ajax/CadastrarAcaoAjax.js"></script> 
<body> 
    <!--antepenultimo passo para mostrar na tela se funciona-->
    <form  method="post" action="../acoes/createAcoes" >

        <!--container-->
        <div class="col-md-10" >
            <div id="page-content" class="margembranca "> 

                <div class="col-md-12" >

                    <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
                        <span>
                            <div class="alert alert-success" role="alert">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                <?php echo $this->session->flashdata('cadSucesso'); ?>
                            </div>
                        </span>
                    <?php } ?>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >

                            <label for="inputEmail" class="col-md-2 control-label">Ação</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" id="acoes" name="acoes" class="form-control " placeholder="">
                                <br/>
                            </div>

                        </div>
                    </div>

                    <div class="celular col-md-3 pull-right">
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked="true" >
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div> 
                    </div>

                    <!--Linha da Agência 
                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Vigência</label>
                            <div class="col-md-3">
                                <input type="date"  id="datainicio" name="datainicio" value="" class= "form-control textbox70"/>

                                <div class="col-md-1 textpos">
                                    <p>a</p>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <input type="date"  id="datatermino" name="datatermino" value=" " class= "form-control textbox70"/>
                                <div class="col-md-2 textpos">
                                    <p>das</p>
                                </div>
                            </div>

                            <div class="col-md-2 ">
                                <input type="text" class="form-control " id="horainicio" name="horainicio" placeholder="00:00">
                                <div class="col-md-4 textpos1">
                                    <p>ás</p>
                                </div>
                            </div>

                            <div class="col-md-2 mudar">
                                <input type="text" class="form-control " id="horatermino" name="horatermino" placeholder="00:00"> 
                            </div>

                        </div>
                    </div>
                    FIM Linha da Agência -->

                    <div class='row col-md-12 vigencia-linha'>
                        <label for="inputEmail" class="col-md-2 control-label vigencia-title"  style="padding: 0px;">Vigência</label>
                        <div class='col-md-10 linha-inputs'  style="padding: 0px; margin-left: -20px;">
                            <input type='date' class='col-md-2 almos-form-control' placeholder="Data" id="datainicio" name="datainicio" />
                            <div class='col-md-1 almos-form-control-text'>a</div>
                            <input type='date' class='col-md-2 almos-form-control' placeholder="Data" id="datatermino" name="datatermino"/>
                            <div class='col-md-1 almos-form-control-text'>das</div>

                            <input type='hour' class='col-md-1 almos-form-control' placeholder="00:00"  id="horainicio" name="horainicio" />
                            <div class='col-md-1 almos-form-control-text'>às</div>
                            <input type='hour' class='col-md-1 almos-form-control' placeholder="00:00" id="horatermino" name="horatermino"/>
                        </div>
                    </div><br/>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >

                            <label for="inputEmail" class="col-md-2 control1-labe">Objetos</label>
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="checkbox" id="selecobjetos" name="selecobjetos" value="1"> Selecione o(s) Objetos(s)
                                </div> 
                            </div>

                        </div>
                    </div>

                    <div class="col-md-10 corpotabobjetos">
                        <div id="divSelecionaObj" class="col-lg-10 pull-right tabelap">

                            <table class="tablesorter">
                                <thead>
                                    <tr>
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Objeto</th>
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Categoria</th>
                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center>Obrig.</center></th>
                                <td style="border-width: thin; border-style: solid; border-color: black; padding: 20px;" id='masterObjCheck'><center><input type="checkbox" name="opcoes" value="html" /> </center></td>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($objetos as $objetos) {
                                        if ($objetos['objStatus'] != 0 && $objetos['objStatus'] != 2) {
                                            ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                            <tr>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['objDescricao']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['titulo']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox"  class="selectCheckObj" index="" id="<?php echo $objetos['objId']; ?>"/> </center></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" class="statusCheckboxObj" name="objsAcoes[]" value="<?php echo $objetos['objId']; ?>"/> </center></td>
                                        </tr
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
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="checkbox" id="objetocategoria" name="objetocategoria" value="1"> Objetos aleatórios pela Categoria
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 ">

                            <select class="col-md-5" id="seleccategoria" name="seleccategoria">

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
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer"> 
                                    <input type="checkbox" id="modspacks" name="modspacks" value="1"> MODs/Packs<br/>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <select class="col-md-5" id="selecmod" name="selecmod">
                                <option value="1">Selecione o MOD/Packs</option>
                                <?php foreach ($mods as $mod) { ?>
                                    <option value='<?php echo $mod['id']; ?>'><?php echo $mod['titulo'] . " - <small>" . $mod['descricao'] . '</small>'; ?></option>
                                <?php } ?>
                            </select> 
                        </div> 
                    </div>       
                    <!--FIM da linha do checkbox com opções--> 

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Qtd.vezes</label>
                            <div class="col-md-10">
                                <input type="number" id="quantidadevezes" name="quantidadevezes" size="4" maxlength="8"  placeholder=""/> <small>por Jogador, limitado a um total de</small>

                                <input type="number" id="quantidadevezes" name="totalvezes" size="4" maxlength="8"  placeholder=""/> <small>vezes</small>
                            </div>    

                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Frequencia</label>
                            <div class="col-md-6">
                                <input type="number" id="frequecia"  name="frequencia" size="4" maxlength="8"> <small>vez a cada</small>

                                <input type="text" id="cadahora" name="cadahora" size="4" maxlength="8"  placeholder=""><small> hora</small>
                            </div>    
                        </div>

                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Para quem</label>
                            <div class = "checbox checboxcontainer" id="div-para-quem-todos-jogadores">
                                <input type="checkbox" id="todousuario" name="todousuario"  value="1"> Todos os Usuários/Jogadores cadastrados
                            </div> 
                        </div>
                    </div>

                    <div id='divSelecionaUsuario'>

                        <div class="col-md-12" id="div-para-quem-somente-equipe-titulo">
                            <div class="col-sm-6 col-lg-5">
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer" >
                                        <input type="checkbox" id="somenteequipe" name="somenteequipe" value="1">  Somente a(s) Equipes(s)
                                    </div> 
                                </div>
                            </div>
                        </div>


                        <div class="col-md-10 corpotabequipes" id="div-para-quem-somente-equipe-tabela">
                            <div id="table-responsive" class="col-lg-10 pull-right tabelap">

                                <table class="tablesorter">
                                    <thead>
                                        <tr>
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Selecionar  a Equipe</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html" id='masterObjCheckEquipes'/> </center></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($equipes as $equipe) {
                                            ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                            <tr>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['equipenome']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox"  class="statusCheckboxEquipes" name="equipesAcoes[]" value="<?php echo $equipe['id']; ?>" /> </center></td>

                                        </tr>

                                    <?php } ?> <!penultimo passo>

                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="col-sm-6 col-lg-12">
                                <div class="col-md-10 pull-right ">
                                    <div class = "checbox checboxcontainer" >
                                        <input type="checkbox"  id="obrigatorio" name="obrigatorio" value="1">  Obrigatório todos os membros da Equipe finalizarem/participarem
                                    </div> 
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12" id="div-para-quem-definir-manualmente">
                            <div class="col-sm-6 col-lg-5">
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer" >
                                        <input type="checkbox" id="definirmanualmente" name="definirmanualmente" value="1"  data-toggle="modal" data-target="#myModal">  Definir manualmente
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-6" >

                            <label for="inputEmail" class="col-md-2 control-label">Dica de tela</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" id="dicatela" name="dicatela" class="form-control" placeholder="">
                                <br/>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Texto p/Log</label>
                            <div class="col-md-3">
                                O usuário/jogador"Fulano"
                            </div>
                            <div class="col-md-4 verbocx">
                                <input type="text" id="textlog" name="textlog"  placeholder="entre com um verbo"  style="padding-left: 3px; width: 60%; float: left; margin-right: 10px;"> a "Ação"
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <!--codigo faz parte da chamada para o código (cadastrarprograma.js)-->
            <input type="hidden" name="status" id="status" status="checked" />
            <!--fim do codigo da chamada de java script-->

            <!-- rodape -->
            <div class="col-md-11 button-box">
                <button type="submit" class="btn btn-primary pull-right btnazul">Salvar e criar Ação</button>
                <button class="btn btn-deafult pull-right btnazul">Salvar</button>
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
    </form>


</body>


<!--FIM container-->