<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

        <script src="../../assets/js/views/ajax/AcaoAjax.js"></script>
<!-- TERMINA AQUI  A TABELA NO HEAD-->

<form  method="post" action="http://localhost:9090/gaming/index.php/acoes/createAcoes" >
    <link href="../../assets/css/Acoes.css" rel="stylesheet"/>
    <script src="../../assets/js/views/ajax/AcaoAjax.js"></script>

    <!--container-->
    <div class="col-md-10  container-style">
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

            <div class="col-md-12" >

                <div class="col-md-8 ">
                </div>
                <div class="col-md-3 ">
                    <select class="span1 pull-right" id="periodofiltra" name="periodofiltra">
                        <option>Selecione o Período para filtrar</option>
                        <option value="1">Viagem</option>
                        <option value="2">Eletrodomésticos</option>
                        <option value="3">Eletroeletrónico</option>
                        <option value="4">Celular/Smartphone</option>
                        <option value="5">Computador/Tablet</option>
                        <option value="6">Show/Entretenimento</option>
                        <option value="7">Comida/Gastronomia</option>
                        <option value="8">Bebida/Enogastronomia</option>
                    </select>
                </div>
            </div>

            <div id="Layer1" class="col-md-11">
                <table class="tablesorter table table-hover" id="Layer1">
                    <thead>
                        <tr>
                            <!-- datatableCount -->
                            <th>Ações</th> 
                            <th><center>Vigências </center></th>
                    <th><center>Ativo</center></th> 
                    <th<center><input type="checkbox" name="opcoes" value="html"/></center></th>

                    </tr>
                    </thead>
                    <tbody ng-repeat="membro in membroSede">
                        <!-- Data Show Row-->
                        <?php
                        foreach ($acoes as $acao) {
                            if ($acao['status'] != 2) {
                                ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                <tr class="listas"> 
                                    <td><?php echo $acao['acoes']; ?></td>
                                    <td><center><?php echo date('d/m/Y', strtotime($acao['datainicio'])) . ' à ' . date('d/m/Y', strtotime($acao['datatermino'])); ?></center></td>
                            <td><center><input type="checkbox" name="cep" class="statusCheckbox" id="<?php echo $acao['id']; ?>" value="<?php echo $acao['status']; ?>" <?php
                                if ($acao['status'] == 1) {
                                    echo "checked";
                                }
                                ?> /> </center></td>
                            <td><center><span class = "glyphicon glyphicon-ban-circle excluirAcao" id="<?php echo $acao['id']; ?>"></span></center> </td>
                            </tr>
                        <?php }
                    } ?>

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
                            <p>Este Ação pode estar sendo usada<br />
                                Confirme se deseja mesmo excluí-la.</p>
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

        <!-- Trigger the modal with a button -->
        <div>
            <a href="../Acoes/cadastrarAcoes"> <button type="button" class="btn btn-primary pull-right btnazul" >Adicionar Ação</button> </a>
            <button type="button" class="btn btn-deafult pull-right" data-toggle="modal" data-target="#myModal">Clonar Ação</button> 

        </div> 
    </div>
</form>
</div>

<!--FIM container-->