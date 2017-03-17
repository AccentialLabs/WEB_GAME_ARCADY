<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--Nessa tela  incluimos o codigo da tabela (cadastrar objetos)-->
<link href="../../assets/css/objetos.css" rel="stylesheet"/>

<script src="../../assets/js/views/ajax/objetosAjax.js"></script>

<form  method="post" action="../objetos/createObjetos">

    <!--container-->
    <div class="col-md-10  container-style">
        <div id="page-content" class="margembranca"> 

            <div id="elemento1" class="col-md-12 pull-left">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Xyz</a> </li>
                        <li class="active">Features</li>
                    </ol>
                </div>
            </div>

            <div class="col-md-12">

                <div class="col-md-8">
                </div>

                <div class="col-md-4">  <!--nesse codigo aqui colocamos ata tabela cadsatrar objetos,-->
                    <select id="categoria" name="categoria" class="form-control pull-left">
                        <option value="0">Selecione a categoria para filtrar</option>
                       <?php foreach($tiposobjeto as $tipo){?>
                         <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['titulo']; ?></option>
                       <?php }?>
                    </select>
                </div>
            </div>

            <div id="Layer1" class="col-md-11">
                <div class="table-responsive">
                    <table class="tablesorter table table-hover">
                        <thead>
                            <tr>
                                <!-- datatableCount -->
                                <th>Perguntas</th> 
                                <th class="text-center">Categoria</th>
                                <th><center>Ativo</center></th> 
                        <th><center><input type="checkbox" name="opcoes" value="html"/></center></th>
                        </tr>
                        </thead>

                        <tbody ng-repeat="membro in membroSede"> 
                            <!-- Data Show Row-->
                            <?php
                      
                            foreach ($obj as $objeto) {
                                if ($objeto['objStatus'] != 2) {
                                    ?> 

                                    <tr class="listas">  
                                        <td><?php echo $objeto['objDescricao']; ?></td>
                                        <td class="text-center"><?php echo $objeto['titulo']; ?></td>
                                        <td><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $objeto['objId']; ?>" value="<?php echo $objeto['objStatus']; ?>" <?php
                                    if ($objeto['objStatus'] == 1) {
                                        echo "checked";
                                    }
                                    ?>/> </center></td>  
                                <td><center><span class = "glyphicon glyphicon-ban-circle excluirObjeto" id="<?php echo $objeto['objId']; ?>"></span></center>
                                </tr>

                            <?php
                            }
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
                                <p class="text-center">Excluir este Objeto pode gerar mudanças no jogo,<br />Deseja continuar exclusão? </p>
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
                <a href="../objetos/cadastrarObjetos">   <button type="button" class="btn btn-primary pull-right btnazul" data-toggle="modal" data-target="#myModal">Adicionar Objeto</button> </a>
                <button type="submit" class="btn btn-deafult pull-right">Importar Planilha de Objetos</button> 
            </div> 

        </div>
    </div>
</form>
</body>


<!--FIM container-->