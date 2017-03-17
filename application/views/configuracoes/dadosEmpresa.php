<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- link da rede social-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- FIM link da rede social-->

<link href="../../assets/css/Configurações.css" rel="stylesheet"/>  <!--CSS DA TELA DADOSEMPRESA-->
<link href="../../assets/css/Configurações1.css" rel="stylesheet"/> <!--CSS DA TELA CADASTRAR REDESOCIAIS-->
<link href="../../assets/css/Configurações2.css" rel="stylesheet"/> <!--CSS DA TELA JOGO-->
<link href="../../assets/css/configuracoes3.css" rel="stylesheet"/> <!--CSS DA TELA USUARIO GESTORES-->
<link href="../../assets/css/configuracoes4.css" rel="stylesheet"/> <!--CSS DA TELA CONTEUDO-->
<link href="../../assets/css/configuracoes5.css" rel="stylesheet"/> <!--CSS DA TELA CATEGORIA OBJETOS-->
<link href="../../assets/css/configuracoes6.css" rel="stylesheet"/> <!--CSS DA TELA RECONHECIMENTO-->
<link href="../../assets/css/configuracoes7.css" rel="stylesheet"/> <!--CSS DA TELA PREMIOS-->
<link href="../../assets/css/configuracoes8.css" rel="stylesheet"/><!--CSS DA TELA USUARIOFACILITADORES-->

<link href="../../assets/css/MenuConfiguracoes.css" rel="stylesheet"/><!--CSS GERAL-->

<script src="../../assets/js/bootstrap.js"></script> 
<script src="../../assets/js/bootstrap.min.js"></script> 

<script src="../../assets/js/views/cadastrarEmpresa.js"></script>   <!--JS DA TELA DADOSEMPRESA-->
<script src="../../assets/js/views/cadastrarJogo.js"></script>      <!--JS DA TELA JOGO-->
<script src="../../assets/js/configuracoes5.js"></script>           <!--JS DA TELA CATEGORIA OBJETOS-->
<script src="../../assets/js/configuracoes6.js"></script>           <!--JS DA TELA RECONHECIMENTO-->
<script src="../../assets/js/configuracoes7.js"></script>           <!--JS DA TELA PREMIOS-->
<script src="../../assets/js/configuracoes8.js"></script>          <!--JS DA TELA USUARIOFACILITADORES-->
<script src="../../assets/js/configuracoes-socialnetword.js"></script> 

<script src="../../assets/js/views/ajax/usuariosGestoresAjax.js"></script> <!--AJAX DA TELA USUARIO GESTORES-->
<script src="../../assets/js/views/ajax/configsConteudo.js"></script> <!--AJAX DA TELA  CONTEUDO-->
<script src="../../assets/js/views/ajax/configsCategoriaobjetosAjax.js"></script> <!--AJAX DA TELA  CATEGORIA OBJETOS-->
<script src="../../assets/js/views/ajax/configsReconhecimentoAjax.js"></script> <!--AJAX DA TELA  RECONHECIMENTO-->
<script src="../../assets/js/views/ajax/configsPremiosAjax.js"></script> <!--AJAX DA TELA  PREMIOS-->
<script src="../../assets/js/views/ajax/configsUsuariosFacilitadoresAjax.js"></script> <!--AJAX DA TELA  UsuariosFacilitadores-->


<form  method="post" action="../configuracoes/createEmpresa" >      <!--FORM DA TELA DADOSEMPRESA-->  
    <form  method="post" action="../configuracoes/createJogo">      <!--FORM DA TELA JOGO-->  
        <!--container-->

        <div class="col-md-10  container-style" id="elemento1">
            <div id="page-content" class="margembranca"> 

                <div id="elemento1" class="col-md-12 pull-left">
                    <div class="col-md-12" id="elemento1">
                        <ol class="breadcrumb" id="elemento1"> 
                            <li><a href="#">Home</a> </li>
                            <li><a href="#">Products </a> </li>
                            <li><a href="#">Xyz </a> </li>
                            <li class="active">Features</li>
                        </ol>
                    </div>
                </div>

                <div  class="col-md-12" id="elemento1">															
                    <div class="tabbable tabs-left">  
                        <div class="col-md-3">      									<!--Aqui começa a tab do lado esquerdo com tabela-->
                            <ul class ="nav nav-tabs nav-stacked secoes menu-configs" id="meusTabs" >	

                                <li class="active"><a href="#tab1" data-toggle="tab">Dados da Empresa</a></li>
                                <li><a href="#tab2" data-toggle="tab" class="tabA">Redes Socias</a></li>
                                <li><a href="#tab3" data-toggle="tab" class="tabA">Jogo</a></li>
                                <li><a href="#tab4" data-toggle="tab" class="tabA">Usuário Gestores</a></li>
                                <li><a href="#tab5" data-toggle="tab" class="tabA">Conteúdo</a></li>
                                <li><a href="#tab6" data-toggle="tab" class="tabA">Categorias de Objetos</a></li>
                                <li><a href="#tab7" data-toggle="tab" class="tabA">Tipo de Reconhecimento</a></li>
                                <li id="essaTab8"><a href="#tab8" data-toggle="tab" class="tabA">Tipo de Prêmios</a></li>
                                <li><a href="#tab9" data-toggle="tab" class="tabA">Usuário Facilitadores</a></li>
                            </ul>    														 <!--Aqui Termina o cabeçalho da tab-->
                        </div>
                        <div class="tab-content menu-configs-content" id="elemento1">

                            <div class="tab-pane active" id="tab1" id="elemento1">  <!--TELA CONFIGURACOES/DADOSEMPRESA-->

                                <div class="col-md-6" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <label for="inputEmail" class="col-md-2 control-label">Nome</label>
                                        <div class="col-md-9 pull-right"><!--tamanho da caixa de texto-->
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="<?php echo $empresa[0]['nome']; ?>">
                                            <br/>
                                        </div>
                                    </div>
                                </div>

                                <!--ativo celular-->                  
                                <div class="celular col-md-2" id="elemento1">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked> 
                                        <label class="onoffswitch-label" for="myonoffswitch">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                                <!--FIM ativo celular-->

                                <div class="col-md-4" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-5 control-label">CNPJ</label>
                                            <div class="col-md-6" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="number"  id="cnpj" name="cnpj" class="form-control" placeholder="" value="<?php echo $empresa[0]['cnpj']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5"><br/><br/><br/></div>

                                <div class="col-md-4" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-5 control-label">CEP</label>
                                            <div class="col-md-4" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="number" id="cep" name="cep" class="form-control" placeholder="" value="<?php echo $empresa[0]['cep']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-2 control-label">Endereço</label>
                                            <div class="col-md-9 pull-right"><!--tamanho da caixa de texto-->
                                                <input type="text" id="enderecol" name="endereco" class="form-control" placeholder="" value="<?php echo $empresa[0]['endereco']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-1 control-label">Nº</label>
                                            <div class="col-md-9"><!--tamanho da caixa de texto-->
                                                <input type="number"  id="numero" name="endereconumero" class="form-control" placeholder="" value="<?php echo $empresa[0]['endereconumero']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-5 control-label">Complemento</label>
                                            <div class="col-md-7" id="elemento1" ><!--tamanho da caixa de texto-->
                                                <input type="text" class="form-control" id="enderecocomplemento" name="enderecocomplemento" placeholder="" value="<?php echo $empresa[0]['enderecocomplemento']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Bairro</label>
                                            <div class="col-md-8" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="text" class="form-control" id="bairro" name="bairro"
                                                       placeholder="" value="<?php echo $empresa[0]['bairro']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-4 control-label">Cidade</label>
                                            <div class="col-md-7 pull-right" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="text" class="form-control" id="cidade_id" name="cidade_id" placeholder="Cidade">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-5 control-label" id="elemento1">Estado</label>
                                            <div class="col-md-6 pull-right" id="elemento1"><!--tamanho da caixa de texto-->
                                                <select class="span1 form-control" id="estado_id" name="estado_id">
                                                    <option value="1">AC</option>
                                                    <option value="2">SP</option>
                                                    <option value="3">BR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-2 control-label" id="elemento1">País</label>
                                            <div class="col-md-8 pull-right"><!--tamanho da caixa de texto-->
                                                <select class="span1 form-control" id="pais_id" name="pais_id">
                                                    <option value="1">BR</option>
                                                    <option value="2">SP</option>
                                                    <option value="3">AC</option>
                                                </select> <br/>
                                            </div> 
                                        </div>
                                    </div>
                                </div> 


                                <div class="col-md-6" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Telefone</label>
                                            <div class="col-md-4"><!--tamanho da caixa de texto-->
                                                <input type="tel" class="form-control" id="telefone1" name="telefone1" placeholder="" value="<?php echo $empresa[0]['telefone1']; ?>">
                                            </div>

                                            <div class="col-md-4"><!--tamanho da caixa de texto-->
                                                <input type="tel" class="form-control" id="telefone2" name="telefone2" placeholder=""  value="<?php echo $empresa[0]['telefone2']; ?>">
                                                <br/>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">E-mail</label>
                                            <div class="col-md-8" ><!--tamanho da caixa de texto-->
                                                <input type="email" class="form-control" id="email" name="email" placeholder=""  value="<?php echo $empresa[0]['email']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Site</label>
                                            <div class="col-md-8"><!--tamanho da caixa de texto-->
                                                <input type="text" class="form-control" id="site" name="site" placeholder=""  value="<?php echo $empresa[0]['site']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Logotipo</label>
                                            <div class="col-md-8" ><!--tamanho da caixa de texto-->
                                                <a href="#" class="ico-search">Clique aqui para selecionar a imagem</a> 
                                            </div><br/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Responsável</label>
                                            <div class="col-md-8"><!--tamanho da caixa de texto-->
                                                <input type="text" class="form-control" id="responsavel_id" name="responsavel_id" placeholder="">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3"><br/> <br/> <br/></div>

                                <div class="col-md-4" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-5 control-label">Telefone</label>
                                            <div class="col-md-5" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="tel" class="form-control" id="responsaveltelefone" name="responsaveltelefone" placeholder=""  value="<?php echo $empresa[0]['responsaveltelefone']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 ramal" id="elemento1">
                                    <div class="col-sm-6 col-lg-11" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-4 control-label" id="elemento1">Ramal</label>
                                            <div class="col-md-7 pull-right" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="number" class="form-control" id="responsavelramal" name="responsavelramal" placeholder=""  value="<?php echo $empresa[0]['responsavelramal']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" id="elemento1" >
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label" id="elemento1">Celular</label>
                                            <div class="col-md-6" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="tel" class="form-control" id="responsavelcelular" name="responsavelcelular" placeholder=""  value="<?php echo $empresa[0]['responsavelcelular']; ?>">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" id="elemento1">
                                    <div class="col-sm-6 col-lg-12" id="elemento1">
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">E-mail</label>
                                            <div class="col-md-8 " ><!--tamanho da caixa de texto-->
                                                <input type="email" class="form-control" id="responsavelemail"name="responsavelemail" placeholder=""  value="<?php echo $empresa[0]['responsavelemail']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--colocar os botoes da tela DADOS EMPRESA--> 
                                <!-- rodape -->
                                <div class="col-md-3 pull-right btnazul">
                                    <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                                    <button class="btn btn-deafult pull-right">Cancelar</button>
                                </div> 
                                <!--FIM colocar os botoes da tela DADOS EMPRESA-->  


                            </div> <!--FIIIIIM DA TELA CONFIGURACOES/DADOSEMPRESA-->
                            <!-- aqui fecha a tab-pane -->

                            <div class="tab-pane" id="tab2">	 <!--TELA CONFIGURACOES/CADASTRAR REDESSOCIAS-->
                                <div class="col-md-9" id="elemento1">
                                    <div class="col-md-6" id="elemento1">
                                        <div class="form-group navbar-text col-md-12" >
                                            <a href="#"><i class="fa fa-facebook-square fa-4x"></i></a>
                                            <div class="col-md-9 pull-right" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="text" class="form-control" placeholder="Facebook" id="facebookProfile">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>

                                    <!--ativo celular-->                  
                                    <div class=" col-md-2 onoff1">
                                        <div class="onoffswitch5" >
                                            <input type="checkbox" name="onoffswitch5" class="onoffswitch5-checkbox" id="myonoffswitch5" checked>
                                            <label class="onoffswitch5-label" for="myonoffswitch5">
                                                <span class="onoffswitch5-inner"></span>
                                                <span class="onoffswitch5-switch"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <label for="inputEmail" class=" control-label onoff2" id="elemento1">Publica Automaticamente</label>
                                </div>
                                <!--  <div class="col-md-2 pull-right"  style="border: 1px solid red">
                                  <label for="text" class=" control-label pull-right">Nome</label>
                             </div> -->

                                <!--FIM ativo celular-->


                                <div class="col-md-9" id="elemento1" >
                                    <div class="col-md-6" id="elemento1">
                                        <div class="form-group navbar-text col-md-12">
                                            <a href="#"><i class="fa fa-twitter-square fa-4x"></i></a>
                                            <div class="col-md-9 pull-right" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="text"  class="form-control" placeholder="Twitter" id="twitterProfile">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>

                                    <!--ativo celular-->                  
                                    <div class=" col-md-2  onoff2">
                                        <div class="onoffswitch2" >
                                            <input type="checkbox" name="onoffswitch2" class="onoffswitch2-checkbox" id="myonoffswitch2" checked>
                                            <label class="onoffswitch2-label" for="myonoffswitch2">
                                                <span class="onoffswitch2-inner"></span>
                                                <span class="onoffswitch2-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <label for="inputEmail" class=" control-label onoff2" id="elemento1">Publica Automaticamente</label>
                                </div>

                                <!--FIM ativo celular-->

                                <div class="col-md-9" id="elemento1">
                                    <div class="col-md-6" id="elemento1">
                                        <div class="form-group navbar-text col-md-12">
                                            <a href="#"><i class="fa fa-instagram fa-4x"></i></a>
                                            <div class="col-md-9 pull-right" id="elemento1"><!--tamanho da caixa de texto-->
                                                <input type="text"class="form-control" placeholder="Instagram" id="instaProfile">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="inputEmail" class=" control-label onoff2" id="elemento1">Publica Automaticamente</label>
                                    <!--ativo celular-->                  

                                    <div class=" col-md-2  onoff1" >
                                        <div class="onoffswitch3 " >
                                            <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
                                            <label class="onoffswitch3-label" for="myonoffswitch3">
                                                <span class="onoffswitch3-inner"></span>
                                                <span class="onoffswitch3-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <!--FIM ativo celular-->

                                <!--goooooogle!-->

                                <div class="col-md-9" id="elemento1">
                                    <div class="col-md-6" id="elemento1">
                                        <div class="col-sm-6 col-lg-8">
                                            <div class="form-group navbar-text">
                                                <a href="#"> <i class = "fa fa-google-plus-square fa-4x"></i></a>
                                            </div>
                                            <div class="col-md-7 pull-right btnaltura" ><!--tamanho da caixa de texto-->
                                                <button type="button" class="btn btn-block btn-large">Conectar</button>
                                                <br/>
                                            </div>
                                        </div>                                 
                                    </div>
                                    <!--ativo celular-->                  
                                    <div class=" col-md-2  onoff1">
                                        <div class="onoffswitch4 " >
                                            <input type="checkbox" name="onoffswitch4" class="onoffswitch4-checkbox" id="myonoffswitch4" checked>
                                            <label class="onoffswitch4-label" for="myonoffswitch4">
                                                <span class="onoffswitch4-inner"></span>
                                                <span class="onoffswitch4-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>    
                                <!--FIM ativo celular-->

                                <!--linkediiiin!-->

                                <div class="col-md-9" id="elemento1">
                                    <div class="col-md-6" id="elemento1">
                                        <div class="col-sm-6 col-lg-8">
                                            <div class="form-group navbar-text">
                                                <a href="#"> <i class="fa fa-linkedin-square fa-4x"></i></a>
                                            </div>
                                            <div class="col-md-7 pull-right btnaltura" ><!--tamanho da caixa de texto-->
                                                <button type="button" class="btn btn-block btn-large">Conectar</button>
                                                <br/>
                                            </div>
                                        </div>                                 
                                    </div>

                                </div>
                                <!--youtubeeeeeeeeee!-->

                                <div class="col-md-9" id="elemento1">
                                    <div class="col-md-6" id="elemento1">
                                        <div class="col-sm-6 col-lg-8" >
                                            <div class="form-group navbar-text">
                                                <a href="#"><i class="fa fa-youtube-square fa-4x"></i></a>
                                            </div>
                                            <div class="col-md-7 pull-right btnaltura" ><!--tamanho da caixa de texto-->
                                                <button type="button" class="btn btn-block btn-large">Conectar</button>
                                                <br/>
                                            </div>
                                        </div>                                 
                                    </div>
                                </div>

                                <div>
                                    <button type="button" id="saveSocialBtn" class="btn btn-primary pull-right btnazul1">Salvar</button>
                                    <button class="btn btn-deafult pull-right">Cancelar</button> 
                                </div> 

                            </div>             <!--FIM DA Tela CONGIGURACOES/CADASTRAR REDESSOCIAIS-->

                            <div class="tab-pane" id="tab3">  <!--Tela CONGIGURACOES-JOGO-->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab3">

                                        <div class="col-md-9">

                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-3 control-label">Status do Jogo</label>

                                                <!--ativo celular-->                  
                                                <div class=" col-md-3 ">
                                                    <!--somente a parte do código do onffswitch com o CSS-->
                                                    <div class="onoffswitch8">
                                                        <input type="checkbox" name="onoffswitch7" class="onoffswitch8-checkbox" id="myonoffswitch8" checked>
                                                        <label class="onoffswitch8-label" for="myonoffswitch8">
                                                            <span class="onoffswitch8-inner"></span>
                                                            <span class="onoffswitch8-switch"></span>
                                                        </label>
                                                    </div>      <!--Fim da parte do código do onffswitch com o CSS-->

                                                    <div class="col-md-3 ligado">
                                                        <label>ligado</label>
                                                    </div>
                                                </div>

                                                <!--FIM ativo celular-->

                                                <!--ativo celular-->                  
                                                <div class=" col-md-5">
                                                    <div class="onoffswitch7">
                                                        <input type="checkbox" name="onoffswitch7" class="onoffswitch7-checkbox" id="myonoffswitch7" checked>
                                                        <label class="onoffswitch7-label" for="myonoffswitch7">
                                                            <span class="onoffswitch7-inner"></span>
                                                            <span class="onoffswitch7-switch"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12 ligado">
                                                        <label>Modo simulação/teste</label>
                                                    </div>  <br/>
                                                </div> 
                                                <!--FIM ativo celular-->


                                            </div>
                                        </div> 

                                        <div class="col-md-7" >
                                            <label for="inputEmail" class="col-md-2 control-label">Exportar</label>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <button type= "button" class= "btn btn-large"> Clique aqui para exportar todos os dados (xls)</button>
                                            </div>
                                            <br/>
                                            <br/>
                                        </div>

                                        <div class="col-md-7" >
                                            <label for="inputEmail" class="col-md-2 control-label">Pontos/Scores</label>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <button type= "button" class= "btn btn-large"> Clique aqui para ZERAR todos os Pontos/Scores)</button>
                                                <br/>
                                            </div>
                                        </div>

                                        <div id ="elemento2" class="col-md-9" > 
                                            <!--margem branca para a parte escrrita-->
                                            <div class="col-md-3 text-center">

                                            </div>
                                            <!--fiM da margem branca para a parte escrrita-->

                                            <div class ="col-md-9">
                                                <p> <b>ATENÇÃO!</b> Esta ação afetará <u>todos</u> os usuários/jogadores do jogo.</br>
                                                Antes de o sistema proceder, o Responsável será contatado para confirmar a ação.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-9">
                                            <div class="form-group col-md-3">
                                                <label for="text" control-label>Pontos expiram após</label>
                                                <br/>
                                            </div>
                                            <div class="col-md-3 text-center">
                                                <input name="pontosexpiram" id="pontosexpiram" type="date"  value="" class="form-control"/> 
                                            </div>
                                            <div class=" col-md-6" id="elemento1">
                                                <label for="text" control-label>Deixe em branco para não perderem a validade</label>

                                            </div>
                                            <br/>
                                        </div>

                                        <div class="col-md-7" >
                                            <label for="inputEmail" class="col-md-3 control-label">Orientação para<br/>os Jogadores</label>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <textarea class="form-control" type="text" id="orientacao" name="orientacao" >
                                                </textarea> <br/>
                                            </div>
                                        </div>


                                        <div class="col-md-7" >
                                            <label for="text" class="col-md-3 control-label">Regras do Jogo</label>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <textarea class="form-control" type="text" id="regras" name="regras" >
                                                </textarea>
                                            </div>
                                            <br/>
                                            <br/>
                                        </div>

                                    </div> 
                                </div>
                            </div> <!--FIM  DA TELA CONFIGURACOES/JOGO-->
                            <!-- aqui fecha a tab-pane -->

                            <div class="tab-pane" id="tab4">        <!--TELA USUARIO GESTORES-->
                                <div class="col-md-9  container-style">
                                    <div id="page-content" class="margembranca"> 

                                        <div id="elemento1" class="col-md-12">
                                            <div class="col-md-12" id="elemento1">
                                                <div class ="col-md-11" id="elemento1">
                                                    <p><b>Gestores do Jogo</b></br>Os gestores do Jogo são colaboradores que podem disparar intervenções
                                                        ou criar ações para os demais Jogadores participarem ou interagirem.</br>
                                                        Use esta tela para selecionar quem serão os colaboradores com este perfil.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-11 corpotabususuario" id="elemento1">
                                            <div class="table-responsive" id="elemento1">
                                                <table class="tablesorter table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome</th>
                                                            <th>Cargo</th>
                                                            <th>Departamento</th>
                                                            <th>Unidade</th>
                                                            <th>Cidade</th>
                                                            <th>Estado</th>
                                                            <th>Pais</th>
                                                            <th><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php foreach ($usuarios as $usuariotb) {
                                                            ?> 
                                                            <tr>
                                                                <td><?php echo $usuariotb['nome']; ?></td>
                                                                <td><?php echo $usuariotb['cargo']; ?></td>
                                                                <td><?php echo $usuariotb['departamento']; ?></td>
                                                                <td><center> <?php echo $usuariotb['unidade']; ?></center></td>
                                                        <td><?php echo $usuariotb['cidade']; ?></td>
                                                        <td><?php echo $usuariotb['estado']; ?></td>
                                                        <td><?php echo $usuariotb['pais']; ?></td>
                                                        <td><center><input type="checkbox"  name="status" class="statusCheckbox" id="<?php echo $usuariotb['id']; ?>" value="<?php echo $usuariotb['status']; ?>" <?php
                                                            if ($usuariotb['status'] == 1) {
                                                                echo "checked";
                                                            }
                                                            ?> /> </center></td>
                                                        </tr>

                                                    <?php } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--colocando os botóes do final da página dentro da ta´-pane-->
                                <div>
                                    <button type="button" class="btn btn-primary pull-right btnazul">Salvar</button>
                                    <button class="btn btn-deafult pull-right">Cancelar</button> 
                                </div> 
                                <!--Tremina aqui os botóes do final da página dentro da ta´-pane-->
                            </div>                             
                            <!--FIM  DA TELA USUARIO GESTORES-->


                            <div class="tab-pane" id="tab5">  <!--TELA  CONTEUDO-->
                                <!maregem a esquerda>
                                <div class="col-md-9  container-style">


                                    <div id="elemento3" class="col-md-12 pull-left">
                                        <p><b> O conteúdo do jogo</b></br>O conteúdo que será destravado para os jogadores, conforme vão avançandono no Jogo,completando tarefas,</br>
                                            missões e outros objetos,deverá ser carregado nesta tela.</br>
                                        </p>
                                    </div>

                                    <div class="col-md-11">
                                        <div class="table-responsive" >
                                            <table class="tablesorter table table-hover">
                                                <thead>
                                                    <tr>
                                                <thNome</th>
                                                    <th>Objetivo</th>
                                                    <th>Tipo</th>
                                                    <th><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody ng-repeat="membro in membroSede">

                                                        <?php
                                                        foreach ($conteudos as $conteudo) {
                                                            if ($conteudo['status'] != 2) {
                                                                ?>

                                                                <tr class="listas">
                                                                    <td><?php echo $conteudo['nome']; ?></td>
                                                                    <td><?php echo $conteudo['objeto']; ?></td>
                                                                    <td><?php echo $conteudo['tipo']; ?></td> 

                                                                    <td><center><span class = "glyphicon glyphicon-ban-circle excluirConteudo" id="<?php echo $conteudo['id']; ?>"></span></center> </td>
                                                            </tr>

                                                            <?php
                                                        }
                                                    }
                                                    ?> <!penultimo passo>
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
                                    <div  class="hide">
                                        <button  type="button" data-toggle="modal" data-target="#myModalDeleteAcao" id="openModalDelete">Open Modal</button> 
                                    </div>
                                    <!-- rodape -->    
                                    <!--colocando os botóes do final da página dentro da ta´-pane-->
                                    <div>
                                        <button type="button" class="btn btn-primary pull-right btnazul" >Adicionar Conteúdo</button>
                                    </div>
                                    <!--Tremina aqui os botóes do final da página dentro da ta´-pane-->

                                </div>
                            </div>           
                            <!--FIM  DA TELA USUARIO CONTEUDO-->

                            <div class="tab-pane" id="tab6">      <!--TELA USUARIO CATEGORIA OBJETOS-->
                                <div class="col-md-9  container-style" id="elemento1">
                                    <div id="page-content" class="margembranca"> 

                                        <!--Aqui estou chamando o script da tabela que add linha-->
                                        <div class="AddTableRow1"></div>
                                        <!--fim da chamada do script da tabela que add linha-->

                                        <!-- Esse é o botão + que adiciona linha na tabela -->

                                        <!-- Fim é o FIM do botão + que adiciona linha na tabela -->

                                        <div class="col-md-11" id="elemento1">
                                            <div id="table-responsive"  class="col-md-12">

                                                <table id="imbatman" class="tablesorter table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Categoria</th>
                                                            <th>Ativo</th>
                                                            <th><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody ng-repeat="membro in membroSede">
                                                        <!-- Data Show Row-->

                                                        <?php
                                                        foreach ($tiposobjeto as $tipoobj) {
                                                            if ($tipoobj['status'] != 2) {
                                                                ?>

                                                                <tr class="listas">
                                                                    <td><?php echo $tipoobj['titulo']; ?></td>
                                                                    <td><center><input type="checkbox"  name="status" class="statusCheckboxTipoObj" id="<?php echo $tipoobj['id']; ?>" value="<?php echo $tipoobj['status']; ?>" <?php
                                                                if ($tipoobj['status'] == 1) {
                                                                    echo "checked";
                                                                }
                                                                ?> /> </center></td>
                                                            <td><center><span class = "glyphicon glyphicon-ban-circle excluirCategoriatb" id="<?php echo $tipoobj['id']; ?>"></span></center> </td>
                                                            </tr>

                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="pull-right">
                                                <button onclick="AddTableRow1()" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                                <button id="saveFromLastRow" type="button" class="btn btn-success" style="display: none;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                                            </div>
                                        </div>


                                        <div class="container">
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModalDeleteAcao2" role="dialog">     <!--.fade = desvanecer o modal de dentro pra fora-->
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
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="confirmExcluirAcao2">Sim</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="hide">
                                            <button type="button" data-toggle="modal" data-target="#myModalDeleteAcao2" id="openModalDelete2">Open Modal</button>
                                        </div>
                                        <!-- rodape -->

                                    </div>
                                    <!--colocando os botóes do final da página dentro da ta´-pane-->
                                    <div class="hide">
                                        <button type="button" class="btn btn-primary pull-right btnazul" data-toggle="modal" data-target="#myModal">Salvar</button>
                                        <button class="btn btn-deafult pull-right">Cancelar</button> 
                                    </div> 
                                    <!--Tremina aqui os botóes do final da página dentro da ta´-pane-->
                                </div>
                            </div> 
                            <!--FIM  DA TELA CATEGORIA OBJETOS-->

                            <div class="tab-pane" id="tab7">      <!--TELA  TIPO RECONHECIMENTO-->
                                <div class="col-md-9  container-style" >
                                    <div id="page-content" class="margembranca"> 


                                        <div class="col-md-11 ">
                                            <div id="table-responsive"  class="col-md-12">
                                                <table id="imbatman2" class="tablesorter table table-hover">  
                                                    <thead>
                                                        <tr>
                                                            <th>Tipos de Reconhecimento</th>
                                                            <th><center>Ativo</center></th>
                                                    <th><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody ng-repeat="membro in membroSede">
                                                        <!-- Data Show Row-->

                                                        <?php
                                                        foreach ($reconhecimento as $reconhecimentotb) {
                                                            if ($reconhecimentotb['status'] != 2) {
                                                                ?>
                                                                <tr class="listas2">
                                                                    <td><?php echo $reconhecimentotb['conquista']; ?></td>
                                                                    <td><center><input type="checkbox"  name="status" class="statusCheckbox" id="<?php echo $reconhecimentotb['id']; ?>" value="<?php echo $reconhecimentotb['status']; ?>" <?php
                                                                if ($reconhecimentotb['status'] == 1) {
                                                                    echo "checked";
                                                                }
                                                                ?> /> </center></td>
                                                            <td><center><span class = "glyphicon glyphicon-ban-circle excluirReconhecimento " id="<?php echo $reconhecimentotb['id']; ?>"></span></center> </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="pull-right">
                                                <button onclick="AddTableRow2()" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                            </div>
                                        </div>

                                        <!--Aqui estou chamando o script da tabela que add linha-->
                                        <div class="AddTableRow2"></div>
                                        <!--fim da chamada do script da tabela que add linha-->

                                        <!-- Esse é o botão + que adiciona linha na tabela -->

                                        <!-- Fim é o FIM do botão + que adiciona linha na tabela -->

                                        <div class="container">
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModalDeleteAcao3" role="dialog">     <!--.fade = desvanecer o modal de dentro pra fora-->
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
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="confirmExcluirAcao3">Sim</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="hide">
                                            <button type="button" data-toggle="modal" data-target="#myModalDeleteAcao3" id="openModalDelete3">Open Modal</button>
                                        </div>
                                        <!-- rodape -->

                                    </div>
                                    <!--colocando os botóes do final da página dentro da ta´-pane-->
                                    <div>
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-primary pull-right btnazul" data-toggle="modal" data-target="#myModal">Salvar</button>
                                        <button type="button" class="btn btn-deafult pull-right">Cancelar</button> 
                                    </div> 
                                    <!--Tremina aqui os botóes do final da página dentro da ta´-pane-->
                                </div><!-- aqui fecha a tab-pane -->
                            </div> 
                            <!--FIM DA TELA TIPO RECONHECIMENTO-->

                            <div class="tab-pane" id="tab8">   <!-- TELA TIPO PREMIOS-->
                                <div class="col-md-9  container-style" >
                                    <div id="elemento1" class="margembranca"> 

                                        <!--Aqui estou chamando o script da tabela que add linha-->
                                        <div class="AddTableRow3"></div>
                                        <!--fim da chamada do script da tabela que add linha-->

                                        <div class="col-md-11" id="elemento1">
                                            <div id="table-responsive"  class="col-md-12">
                                                <table id="imbatman3" class="tablesorter table table-hover">  
                                                    <thead>
                                                        <tr>
                                                            <th>Tipos de Prêmios</th>
                                                            <th><center>Ativo</center></th>
                                                    <th><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody ng-repeat="membro in membroSede">

                                                        <?php
                                                        foreach ($tipopremio as $tipopremio) {
                                                            if ($tipopremio['status'] != 2) {
                                                                ?> 

                                                                <tr class="listas">
                                                                    <td><?php echo $tipopremio['descricao']; ?></td>
                                                                    <td><center><input type="checkbox"  name="status" class="statusCheckbox" id="<?php echo $tipopremio['id']; ?>" value="<?php echo $tipopremio['status']; ?>" <?php
                                                                if ($tipopremio['status'] == 1) {
                                                                    echo "checked";
                                                                }
                                                                ?> /> </center></td>
                                                            <td><center><span  class = "glyphicon glyphicon-ban-circle excluirPremio4" id="<?php echo $tipopremio['id']; ?>"></span></center></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?> 

                                                    </tbody> 
                                                </table>
                                            </div>
                                            <!-- Esse é o botão + que adiciona linha na tabela -->
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-primary" id="btnSalvarTiposPremio"><small>Salvar</small></button>
                                                <button onclick="AddTableRow3()" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                            </div>
                                        </div>


                                        <!-- Fim é o FIM do botão + que adiciona linha na tabela -->


                                        <div class="container">
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModalDeleteAcao4" role="dialog">     <!--.fade = desvanecer o modal de dentro pra fora-->
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
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="confirmExcluirAcao4">Sim</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="hide">
                                            <button type="button" data-toggle="modal" data-target="#myModalDeleteAcao4" id="openModalDelete4">Open Modal</button>
                                        </div>
                                        <!-- rodape -->

                                    </div>
                                </div>
                            </div>   <!--FIM DA TELA  PREMIOS-->

                            <div class="tab-pane" id="tab9">  <!-- TELA  USUSARIO FACIITADORES-->
                                <div class="col-md-9  container-style" >
                                    <div id="page-content" class="margembranca"> 

                                        <!--Aqui estou chamando o script da tabela que add linha-->
                                        <div class="AddTableRow4"></div>
                                        <!--fim da chamada do script da tabela que add linha-->

                                        <div class="col-md-11 ">
                                            <div id="table-responsive"  class="col-md-12">
                                                <table id="imbatman4" class="tablesorter table table-hover">  
                                                    <thead>

                                                        <tr>
                                                            <th>Nome</th>
                                                            <th>E-Mail</th>
                                                            <th><center>Telefone</center></th>
                                                    <th><center>Ativo</center></th>
                                                    <th><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        foreach ($facilitadores as $facilitador) {
                                                            if ($facilitador['status'] != 2) {
                                                                ?> 
                                                                <tr>
                                                                    <td><?php echo $facilitador['nome']; ?></td>
                                                                    <td><?php echo $facilitador['email']; ?></td>
                                                                    <td><?php echo $facilitador['telefone']; ?></td>
                                                                    <td><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $facilitador['id']; ?>" value="<?php echo $facilitador['status']; ?>" <?php
                                                                if ($facilitador['status'] == 1) {
                                                                    echo "checked";
                                                                }
                                                                ?>/> </center></td>
                                                            <td><center><span  class = "glyphicon glyphicon-ban-circle excluirUsuarioFacilitador" id="<?php echo $facilitador['id']; ?>" ></span></center> </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="pull-right">
                                                <button onclick="AddTableRow4()" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                            </div>
                                        </div>

                                        <div class="container">
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModalDeleteAcao5" role="dialog">     <!--.fade = desvanecer o modal de dentro pra fora-->
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
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="confirmExcluirAcao5">Sim</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="hide">
                                            <button type="button" data-toggle="modal" data-target="#myModalDeleteAcao5" id="openModalDelete5">Open Modal</button>
                                        </div>
                                        <!-- rodape -->

                                        <!-- Esse é o botão + que adiciona linha na tabela -->

                                        <!-- Fim é o FIM do botão + que adiciona linha na tabela -->
                                    </div>
                                </div>
                            </div>
                            <!--FIM DA TELA  USUSARIO FACIITADORES-->

                        </div>  <!--fim da TAB-->


                    </div>							
                </div>	 
            </div>	       
        </div>
        <!--esse input serve para a declaração do onoffswitch do status-->
        <input type="hidden" id="status" name="status" />
        <!--Fim da declaração do input para a declaração do onoffswitch do status-->

        </div>
    </form>
</form>


<!--FIM container-->