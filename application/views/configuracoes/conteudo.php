<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<link href="../../assets/css/configuracoes4.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/configsConteudo.js"></script>

<!-- TERMINA AQUI  A TABELA NO HEAD-->
<body>

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

            <div  class="col-md-12">															
                <div class="tabbable tabs-left"> 
                    <div class="col-md-3">      									<!--Aqui começa a tab do lado esquerdo com tabela-->
                        <ul class ="nav nav-tabs nav-stacked">	

                            <li><a href="#tab1" data-toggle="tab">Dados da Empresa</a></li>
                            <li><a href="#tab2" data-toggle="tab">Redes Socias</a></li>
                            <li><a href="#tab3" data-toggle="tab">Jogo</a></li>
                            <li><a href="#tab4" data-toggle="tab">Usuário Gestores</a></li>
                            <li class="active"><a href="#tab5" data-toggle="tab">Conteúdo</a></li>
                            <li><a href="#tab6" data-toggle="tab">Categorias de Objetos</a></li>
                            <li><a href="#tab7" data-toggle="tab">Tipo de Reconhecimento</a></li>
                            <li><a href="#tab8" data-toggle="tab">Tipo de Prêmios</a></li>
                            <li><a href="#tab9" data-toggle="tab">Usuário Facilitadores</a></li>
                        </ul>    														 <!--Aqui Termina o cabeçalho da tab-->
                    </div>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab5">
                            <!maregem a esquerda>
                            <div class="col-md-9  container-style">


                                <div id="elemento3" class="col-md-12 pull-left">
                                    <p><b> O conteúdo do jogo</b></br>O conteúdo que será destravado para os jogadores, conforme vão avançandono no Jogo,completando tarefas,</br>
                                        missões e outros objetos,deverá ser carregado nesta tela.</br>
                                    </p>
                                </div>

                                <div class="col-md-11">
                                    <div class="table-responsive" >
                                        <table class="tablesorter">
                                            <thead>
                                                <tr>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Nome</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Objetivo</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Tipo</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                            </tr>
                                            </thead>
                                            <tbody ng-repeat="membro in membroSede">

                                                <?php
                                                foreach ($conteudos as $conteudo) {
                                                    if ($conteudo['status'] != 2) {
                                                        ?>

                                                        <tr class="listas">
                                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $conteudo['nome']; ?></td>
                                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $conteudo['objeto']; ?></td>
                                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $conteudo['tipo']; ?></td> 

                                                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><span class = "glyphicon glyphicon-ban-circle excluirConteudo" id="<?php echo $conteudo['id']; ?>"></span></center> </td>
                                                    </tr>

                                                <?php }
                                            } ?> <!penultimo passo>
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
                                                    <p>Este Ação está sendo usada em </br>Reconhecimento e Programas!</br>
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

                            </div>

                            <!--colocando os botóes do final da página dentro da ta´-pane-->
                            <div>
                                <button type="button" class="btn btn-primary pull-right btnazul" >Adicionar Conteúdo</button>
                            </div>
                            <!--Tremina aqui os botóes do final da página dentro da ta´-pane-->

                        </div> <!-- aqui fecha a tab-pane -->


                        <div class="tab-pane" id="tab2">	 <!--Teste 1 para ver se funciona a caixa de lado-->
                            <p>Hey, estou na seção 2</p>
                        </div>
                        <div class="tab-pane" id="tab1">	
                            <p>Hey, estou na seção 1</p>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <p>Estou na seção 3</p>
                        </div>							<!--Termina aqui o teste 1 para ver se funciona a caixa de lado-->

                    </div>							
                </div>	 
            </div>	       

            <!-- rodape -->


        </div>
    </div>

</body>


<!--FIM container-->