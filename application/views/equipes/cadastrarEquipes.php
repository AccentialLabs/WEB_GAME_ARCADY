<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--configurações do Gantt-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="tablesorter/css/blue/style.css">
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="../../assets/css/cadastrar-equipes.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../../assets/js/cadastrar-equipes.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="../../assets/js/jquery.fn.gantt.js"></script>
<!--fim das configurações do Gantt-->

<link href="../../assets/css/cadastrar-equipes.css" rel="stylesheet"/>
<script src="../../assets/js/cadastrar-equipes2.js"></script> 

<script src="../../assets/js/jquery.min.js"></script> <!--O checkbox esta salvando, não mudar de posição esse codigo nem retirar-->

<form  method="post" action="../equipes/createEquipes">
    <script src="../../assets/js/views/ajax/cadastrarEquipesAjax.js"></script>

    <!--container-->
    <div class="col-md-10  container-style" id="elemento1">
        <br/>
        <div id="page-content" class="margembranca"> 

            <div  class="col-md-12" id="elemento1">

                <div  class="col-md-12" id="campos-cadastro-corpo">
                    <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
                        <span>
                            <div class="alert alert-success" role="alert">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                <?php echo $this->session->flashdata('cadSucesso'); ?>
                            </div>
                        </span>
                    <?php } ?>
                    <div class = "checbox checboxcontainer">
                        <label><input id="cadastro" name="cadastro" type="checkbox"  VALUE=""> Campos do Cadastro </label>
                    </div> 

                    <div class="col-md-2 checboxx ">

                        <div class = "checbox checboxcontainer">
                            <label><input id="cargo_id" name="cargo_id" type="checkbox"  VALUE="1"> Cargo </label>
                        </div> 

                        <div class = "checbox checboxcontainer">
                            <label><input id="departamento_id" name="departamento_id" type="checkbox"  VALUE="1"> Departamento</label>
                        </div> 
                        <div class = "checbox disabled checboxcontainer">
                            <label><input id="unidade_id" name="unidade_id"type="checkbox"  VALUE="1"> Unidade</label>
                        </div> 

                    </div>


                    <div  class="col-md-3">
                        <div class = "checbox checboxcontainer">
                            <label><input id="cidade_id" name="cidade_id" type="checkbox"  VALUE="1" > Cidade </label>
                        </div>  
                        <div class = "checbox checboxcontainer">
                            <label><input id="estado_id" name="estado_id" type="checkbox"  VALUE="1" > Estado</label>
                        </div> 
                        <div class = "checbox disabled checboxcontainer">
                            <label><input id="pais_id" name="pais_id" type="checkbox"  VALUE="1" > País</label>
                        </div>  
                    </div>
                </div>

                <!--primeiro radiobox-->
                <div id="aleatorio-corpo">
                    <div class="col-sm-6 col-lg-7">
                        <label>
                            <input id="aleatorio" name="aleatorio" type="checkbox"  value="1" /> 
                            Aleatório
                        </label>
                    </div>
                    <!--Fim doorimeiro radiobox-->
                    <div class="col-md-12">
                        <label for="inputEmail" class="col-md-1 control-label">Qtd.Equipes </label>
                        <div class="col-sm-1 col-md-2"  >
                            <input id="equipeqtd" name="aleatorio_qtd_equipe" class="input-mini" type="text" size="9">                        
                        </div>

                        <div class="col-sm-1 col-lg-7" id="elemento1">
                            <label id="elemento1" for="inputEmail" class="col-md-6 control-label">Nome das Equipes (prefixo)</label>
                            <div class="col-md-2" id="elemento1">
                                <input id="equipeprefixo" name="aleatorio_prefix_nome" class="input-mini pull-right" type="text">  
                            </div>

                            <div class="col-sm-5 col-lg-4 pull-right" id="elemento1">
                                <label for="inputEmail" class="col-md-1 control-label">+Sequencial </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!--segundo radiobox-->

                <div class="col-sm-6 col-lg-6"> 
                    <label>
                        <input id="manual" name="manual" type="checkbox" value="1" /> 
                        Manual
                    </label>
                </div>
                <!--Fim dosegundo radiobox-->
                <div id="manual-corpo">
                    <div  class="col-md-12">	<!--esse aqui muda a lagura da tabela toda-->														
                        <div class="tabbable tabs-left">  

                            <div class="col-md-11"> <!--esse aqui muda a lagura de dentro da tabela-->
                                <div class="tab-content">


                                    <!--aqui começa o restante da tabela-->

                                    <div id="elemento1"  class=" col-md-12 table-responsive corpotabusuariotb">
                                        <table class="tablesorter">
                                            <thead>
                                                <tr>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Nome</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Cargo</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Departamento</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Unidade</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Cidade</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Estado</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Pais</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($usuariotb as $usuariotb) {
                                                    ?> 

                                                    <tr>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['nome']; ?></td>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['cargo']; ?></td>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['departamento']; ?></td>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['unidade']; ?></td>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['cidade']; ?></td>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['estado']; ?></td>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['pais']; ?></td>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="cep" class="statusCheckbox" id="<?php echo $usuariotb['id']; ?>" value="<?php echo $usuariotb['status']; ?>" <?php
                                                    if ($usuariotb['status'] == 1) {
                                                        echo "checked";
                                                    }
                                                    ?> /> </center></td>
                                                </tr>

                                            <?php } ?> 

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--aqui termina a tabela-->

                                    <!--ultima caixa-->
                                    <div class="col-sm-1 col-lg-8" id="elemento1" > <br/>
                                        <label id="elemento1" for="inputEmail" class="col-md-3 control-label"> Nome da Equipe</label>
                                        <div class="col-md-5" id="elemento1">
                                            <input id="equipenome" name="equipenome" class="form-control" type="text">                  
                                        </div>
                                    </div>
                                    <!-- Fim da ultima caixa -->

                                </div>
                            </div>
                        </div>							<!--Aqui termina a tab do lado esquerdo com tabela-->
                    </div>  
                </div>


                <!--DIV QUE CHAMA O GANTT => -->    <!--<div class="gantt"></div>-->
                <div class="col-md-8" id="elemento1"> <br/>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-3 control-label">Tema para Equipe</label>
                        <div class="col-md-5" id="elemento1">
                            <select id="temaequipe" name="temaequipe" class="span1 form-control" >
                                <option value="1">Selecione o Tema (MOD/Pack)</option>
                                <?php foreach ($modpacks as $mod) { ?>
                                    <option value="<?php echo $mod['id']; ?>" ><?php echo $mod['titulo']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <!-- rodape -->
            <div>
                <button type="submit" class="btn btn-primary pull-right btnazul">Criar Equipes</button>
                <button class="btn btn-deafult pull-right">Cancelar</button>
            </div> 

        </div>
    </div>

</form>

<!--FIM container-->


