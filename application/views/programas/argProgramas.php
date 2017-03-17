<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->    <link href="http://localhost:9090/game/css/bootstrap.min.css" rel="stylesheet"/> 
<link href="../../assets/css/programas-arg.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/programasAjax.js"></script>

<body>

    <!--antepenultimo passo para mostrar na tela se funciona-->

    <!--container-->
    <div class="col-md-10  container-style">

        <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
            <span>
                <div class="alert alert-success" role="alert">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <?php echo $this->session->flashdata('cadSucesso'); ?>
                </div>
            </span>
        <?php } ?>

        <div id="page-content" class="margembranca"> 

            <ol class="breadcrumb">
                <li><a href="#">Home</a> </li>
                <li><a href="#">Products </a> </li>
                <li><a href="#">Xyz </a> </li>
                <li class="active">Features</li>
            </ol>

            <div id="Layer1" class="col-md-11">
                <div class="col-md-12" >
                    <div class="table-responsive">
                        <table class="tablesorter table table-hover" id="Layer1">
                            <thead>
                                <tr>
                                    <!-- datatableCount -->
                                    <th>Programas</th> 
                                    <th><center>Dt.Início</center></th> 
                            <th><center>Dt.Final</center></th> 
                            <th><center>Ativo</center></th> 
                            <th><center><input type="checkbox" name="opcoes" value="html"/></center></th>
                            </tr>
                            </thead>
                            <tbody ng-repeat="membro in membroSede">
                                <!-- Data Show Row-->

                                <?php
                                foreach ($programas as $programas) {
                                    if ($programas['status'] != 2) {
                                        $dtInicio = explode(' ', $programas['datainicio']);
                                        $dtTermino = explode(' ', $programas['datatermino']);
                                        ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                        <tr class="listas">
                                            <td><?php echo $programas['nome']; ?></td>

                                            <td class="text-center"><?php echo date('d/m/Y', strtotime($dtInicio[0])); ?></td>
                                            <td class="text-center"><?php echo date('d/m/Y', strtotime($dtTermino[0])); ?></td>
                                            <td><center><input type="checkbox" name="opcoes"  class="statusCheckbox" id="<?php echo $programas['id']; ?>" value="<?php echo $programas['status']; ?>" <?php
                                        if ($programas['status'] == 1) {
                                            echo "checked";
                                        }
                                        ?>  /> </center></td>
                                    <td><center><span  class = "glyphicon glyphicon-ban-circle excluirPrograma" id="<?php echo $programas['id']; ?>" ></span></center> </td>
                                    </tr>

                                    <?php
                                }
                            }
                            ?> <!penultimo passo>

                            </tbody>
                        </table>
                    </div>
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
                                <p>Excluir este Programa pode causar mudanças no jogo</br>
                                    Deseja confirmar exclusão?</p>
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
                <a href="../programas/cadastrarProgramas"> <button type="button" class="btn btn-primary pull-right">Adicionar programa</button> </a>
                <button class="btn btn-deafult pull-right btnazul">Clonar Programa</button> 
                <a href="../funcionario/enviarEmailConvite"> <button class="btn btn-deafult pull-right btnazul">Enviar e-mail/convite</button> </a>
            </div> 

        </div>
    </div>

</body>
</html>

<!--FIM container-->