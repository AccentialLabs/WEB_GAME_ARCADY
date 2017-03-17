<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<link href="../../assets/css/jogadores-u2.css" rel="stylesheet"/>
<script src="../../assets/js/jogadores-u2.js"></script> 

<script src="../../assets/js/views/ajax/jogadoresAjax.js"></script> 

<!--container-->
<div id="elemento1" class="col-md-10  container-style">
    <div id="page-content" class="margembranca"> 

        <div id="elemento1" class="col-md-12 pull-left">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Products </a> </li>
                    <li><a href="#">Xyz </a> </li>
                    <li class="active">Features</li>
                </ol>
            </div>
        </div>


        <div id="Layer1" class="col-md-12">
            <div class="table-responsive">

                <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
                    <span>
                        <div class="alert alert-success" role="alert">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            <?php echo $this->session->flashdata('cadSucesso'); ?>
                        </div>
                    </span>
                <?php } ?>

                <table class="table table-hover tablesorter">
                    <thead>
                        <tr>
                            <!-- datatableCount -->
                            <th>Nome</th> 
                            <th>Cargo</th> 
                            <th>Departamento</th> 
                            <th>Unidade</th> 
                            <th>Cidade</th> 
                            <th>Estado</th> 
                            <th>País</th> 
                            <th>Ativo</th> 
                            <th><center><input type="checkbox" name="opcoes" value="html"/></center></th> 
                    <th></th>
                    </tr>
                    </thead>
                    <tbody ng-repeat="membro in membroSede">
                        <!-- Data Show Row-->

                        <?php
                        foreach ($usuariotb as $usuariotb) {
                            if ($usuariotb['status'] != 2) {
                                ?>
                                <tr class="listas">
                                    <td><?php echo $usuariotb['nome']; ?></td>
                                    <td><?php echo $usuariotb['cargo']; ?></td>
                                    <td><?php echo $usuariotb['departamento']; ?> </td>
                                    <td><?php echo $usuariotb['unidade'] ?></td>
                                    <td><?php echo $usuariotb['cidade'] ?></td>
                                    <td><?php echo $usuariotb['estado'] ?></td>
                                    <td><?php echo $usuariotb['pais'] ?></td>
                                    <td><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $usuariotb['id']; ?>" value="<?php echo $usuariotb['status']; ?>" <?php
                                if ($usuariotb['status'] == 1) {
                                    echo "checked";
                                }
                                ?>/></center></td>
                            <td><center><span  class="glyphicon glyphicon-ban-circle excluirUsuario" id="<?php echo $usuariotb['id']; ?>"></span></center> </td>
                            <td class="text-center">
                                <a href="../Jogadores/editarJogadorFuncionario/<?php echo $usuariotb['id']; ?>"><span  class="glyphicon glyphicon-pencil"></span></a>
                            </td>            
                            </tr>

                            <?php
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>

        </div>

        <!--MODAL-->
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
                            <p class="text-center">Excluir este Jogador pode gerar mudanças no jogo,<br />Deseja continuar exclusão? </p>
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
        <div class="col-md-12">
            <!-- Trigger the modal with a button -->
            <a href="../funcionario/cadastrarFuncionario">  <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal">Adicionar Funcionário</button> </a>
            <a href="../funcionario/importarFuncionario">   <button class="btn btn-deafult pull-right btncinza1">Importar planilha</button> </a>
            <a href="../funcionario/enviarEmailConvite">   <button class="btn btn-deafult pull-right btncinza2">Enviar e-mail/convite</button> </a>

        </div> 

    </div>
</div>


<!--FIM container-->