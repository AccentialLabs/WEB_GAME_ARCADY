
<!--PODEMOS UTILIZAR ESSA TELA COMO EXEMPLO POIS AQUI ESTA EXECUTANDO DUAS TABELAS-->


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<link href="../../assets/css/reconhecimentos-conquistas.css" rel="stylesheet"/>

<script src="../../assets/js/views/ajax/reconhecimentoConquistaAjax.js"></script>


<body>

    <!--estou criando essa linha de comandos agora para somente a parte da opção de filtragem-->
    <form  method="post" action="../reconhecimento/createConquista">


        <!--container-->
        <div class="col-md-10  container-style">
            <div id="page-content" class="margembranca"> 

                <ol class="breadcrumb">
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Products </a> </li>
                    <li><a href="#">Xyz </a> </li>
                    <li class="active">Features</li>
                </ol>

                <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
                    <span>
                        <div class="alert alert-success" role="alert">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            <?php echo $this->session->flashdata('cadSucesso'); ?>
                        </div>
                    </span>
                <?php } ?>

                <div class="col-md-7 ">
                </div>
                <div class="col-lg-4">
                    <select class="span1 pull-right" id="tipofiltra" name="tipofiltra">
                        <option value="1">Selecione o Tipo para filtrar</option>
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

                <div id="Layer1" class="col-md-11">
                    <div class="table-responsive">
                        <table class="tablesorter table table-hover">
                            <thead>
                                <tr>
                                    <!-- datatableCount -->
                                    <th>Reconhecimentos<br/>Conquistas</th> 
                                    <th><center>Tipo </center></th>
                            <th><center>Modo de aferição</center></th> 
                            <th><center>Ativo</center></th> 
                            <th><center><input type="checkbox" name="opcoes" value="html"/></center></th>

                            </tr>
                            </thead>
                            <tbody ng-repeat="membro in membroSede">
                                <!-- Data Show Row-->

                                <?php
                                foreach ($reconhecimento as $reconhecimento) {
                                    if ($reconhecimento['status'] != 2) {
                                        ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                        <tr class="listas">

                                            <td><?php echo $reconhecimento['conquista']; ?></td>
                                            <td class="text-center"><?php echo $reconhecimento['tipo']; ?></td>
                                            <td class="text-center"><?php echo $reconhecimento['modoafericao']; ?></td>
                                            <td><center><input type="checkbox" class="statusTipoCheckbox" name="opcoes" id="<?php echo $reconhecimento['id']; ?>" value="<?php echo $reconhecimento['status']; ?>" <?php
                                        if ($reconhecimento['status'] == 1) {
                                            echo "checked";
                                        }
                                        ?>/> </center></td>
                                    <td><center><span  class = "glyphicon glyphicon-ban-circle excluirReconhecimento" id="<?php echo $reconhecimento['id']; ?>" ></span></center> </td>
                                    </tr>

                                    <?php
                                }
                            }
                            ?> <!penultimo passo>

                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModalDeleteAcao" role="dialog">     <!--.fade = desvanecer o modal de dentro pra fora-->
                        <div class="modal-dialog modal-sm"><!--diálogo-.modal=define a largura adequada e margem do modal"tamanho".modal-lg-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><center>ATENÇÃO!</center></h4>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center">Excluir este Reconhecimento/Conquista pode gerar mudanças no jogo,<br />Deseja continuar exclusão? </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="confirmExcluirAcao">Sim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModalDeleteAcao" id="openModalDelete">Open Modal</button>
                <!-- rodape -->

                <div>
                    <a href="../reconhecimento/cadastrarConquista">    <button type="button" class="btn btn-primary pull-right">Adicionar Reconhecimento</button> </a>
                </div> 

            </div>
        </div>
    </form>
</body>

<!--FIM container-->