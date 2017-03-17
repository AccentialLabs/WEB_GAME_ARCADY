<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link href="../../assets/css/Premios.css" rel="stylesheet"/>

<script src="../../assets/js/views/ajax/premiosAjax.js"></script>

<!--antepenultimo passo para mostrar na tela se funciona-->
<form  method="post" action="../premio/createGanharpremio" >      

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

                <div class="col-md-5">
                </div>

                <div class = "checbox col-md-3 ">
                    <label><input type="checkbox" id="catalogopremio" name="catalogopremio" VALUE="1" > Somente do catalogo de premios</label>                               
                </div>
                <div class="col-md-4">
                    <select class="col-md-9" id="tipofiltra" name="tipofiltra">
                        <option value="1">Selecione o tipo para filtrar</option>
                        <option value="2">Viagem</option>
                        <option value="3">Eletrodomésticos</option>
                        <option value="4">Comida</option>
                    </select>
                </div>
            </div>

            <div id="Layer1" class="col-md-11">
                <div class="table-responsive">
                    <table class="tablesorter table table-hover">
                        <thead>
                            <tr>
                                <!-- datatableCount -->
                                <th>Prêmios</th> 
                                <th ><center>Tipo </center></th>
                        <th>Qtd.inicial</th> 
                        <th>Qtd.Atual</th> 
                        <th>Ativo</th> 
                        <th><center><input type="checkbox" name="opcoes" value="html"/></center></th>

                        </tr>
                        </thead>
                        <tbody ng-repeat="membro in membroSede">
                            <!-- Data Show Row-->

                            <?php
                            foreach ($premio as $premio) {
                                if ($premio['premioStatus'] != 2) {
                                    ?> 
                                    <tr class="listas">
                                        <td><?php echo $premio['nome']; ?></td>
                                        <td class="text-center"><?php echo $premio['tipoDescricao']; ?></td>
                                        <td><?php echo $premio['quantidadepremios']; ?></td>
                                        <td><?php echo $premio['quantidadeatualpremios']; ?></td>
                                        <td><center><input type="checkbox"  name="status" class="statusCheckbox" id="<?php echo $premio['premioId']; ?>" value="<?php echo $premio['premioStatus']; ?>" <?php
                                    if ($premio['premioStatus'] == 1) {
                                        echo "checked";
                                    }
                                    ?> /> </center></td>
                                <td><center><span class = "glyphicon glyphicon-ban-circle excluirPremio" id="<?php echo $premio['premioId']; ?>"></span></center> </td>
                                </tr>
                            <?php }
                        }
                        ?>

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
                                <p class="text-center">Excluir esse prêmio pode gerar mudanças no jogo<br />
                                    Deseja continuar exclusão?</p>
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
                <a href="../premio/cadastrarpremio"> <button type="button" class="btn btn-info pull-right btnazul" data-toggle="modal" data-target="#myModal">Adicionar Prêmio</button> </a>   
            </div> 

        </div>
    </div>
</form>
</body>


<!--FIM container-->