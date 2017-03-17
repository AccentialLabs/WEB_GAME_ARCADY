<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<link href="../../assets/css/cadastrar-premio.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/cadastraPremioAjax.js"></script>    

<form  method="post" action="../Premio/createPremio">
    <!--container-->
    <div class="col-md-10  container-style ">
        <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
            <span>
                <div class="alert alert-success" role="alert">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <?php echo $this->session->flashdata('cadSucesso'); ?>
                </div>
            </span>
        <?php } ?>
        <div id="page-content" class="margembranca "> 

            <div class="col-md-12" >

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Nome</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control tamanho" name="nome" id="inputEmail" placeholder="Nome">
                            <br/>
                        </div>
                    </div>
                </div>

                <!--ativo celular-->                  
                <div class="celular col-md-3 ">
                    <div class="onoffswitch">
                        <input type="checkbox" name="status" class="onoffswitch-checkbox" value="1" id="myonoffswitch" checked>
                        <label class="onoffswitch-label" for="myonoffswitch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
                <!--FIM ativo celular-->

                <div class="col-md-12" >
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Tipo</label>
                        <div class="col-md-7">
                            <select class="span1 form-control" name="tipopremio_id">
                                <?php foreach ($tipos as $tipo) {
                                    if ($tipo['status'] == 1) {
                                        ?>
                                        <option id="<?php echo $tipo['id']; ?>" value="<?php echo $tipo['id']; ?>"><?php echo $tipo['descricao']; ?></option>
    <?php }
} ?>

                            </select> <br/>
                            <br/>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control1-labe">Descrição</label>
                            <div class="col-md-7">
                                <textarea class="form-control" name="descricao"></textarea>
                                <br/>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Imagens</label>
                            <div class="col-md-7">
                                <a href="#" class="ico-search">Clique aqui para selecionar a imagem</a>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Site</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control " id="inputEmail" placeholder="Site" name="site">
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Link adicional</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control tamanho" id="inputEmail" placeholder="Link Adicional" name="linkadicional">
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control1-labe">Informações adicionais</label>
                            <div class="col-md-7">
                                <textarea class="form-control" placeholder="Informações Adicionais" name="informacoesadicionais"></textarea>
                                <br/>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Instruções para receber<br/>o prêmio</label>
                            <div class="col-md-7">
                                <textarea class="form-control" placeholder="Instruções" name="intrucoes"></textarea>
                                <br/>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="col-md-12">
                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Quantidade</label>
                            <div class="col-md-7">
                                <div class = "checbox " >
                                    <input type="radio"  value="nome" id="premioIlimitado"> ilimitado/sem controle 
                                </div> 

                                <div class = "checbox checboxcontainer">
                                    <input type="radio" name="quantidadecontrolada" id="premioControlado"> com controle de estoque
                                </div>                               
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control1-labe"> </label>
                            <div class="col-md-3">
                                <div class="col-md-3">Qtd.inicial</div> 
                                <input type="number"  size="5" maxlength="8"   placeholder="0" class="col-md-7 numberfield" id="quantidadepremios" name="quantidadepremios">
                            </div>

                            <div class="col-md-4 espacoEntre">
                                <div class="col-md-2"> Qtd.atual</div>
                                <input type="number"  size="5" maxlength="8"  placeholder="0" class="col-md-7 numberfield"  id="quantidadeatualpremios" name="quantidadeatualpremios">  <a href="#" class="ico-search1">redefinir</a>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="col-md-12">
                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control1-labe">Disponibilidade</label>
                            <div class="col-md-7">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio"  value="1" id="disponibilizadoPorConquista"> por conquista
                                </div> 

                                <div class = "checbox checboxcontainer" >
                                    <input type="radio"  value="1" name="catalogopremio" id="disponibilizadoCatalogo"> no Catálogo de Prêmios
                                </div>    

                                Qtd.Pontos 
                                <input type="number" size="4" maxlength="8" id="quantidadedisponibilizadade" placeholder="" class="numberfield" name="quantidadedisponibilizadade">


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- rodape -->
        <div>
            <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
            <button type="reset"class="btn btn-deafult pull-right">Cancelar</button>
        </div> 

    </div>
</form>
<!--FIM container-->