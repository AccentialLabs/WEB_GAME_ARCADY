<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<link href="../../assets/css/cadastrar-reconhecimento-conquistas.css" rel="stylesheet"/>

<script src="../../assets/js/views/cadastrarConquista.js"></script> 
<body>

    <form method="post" action="../reconhecimento/createConquista">      

        <!--container-->
        <div class="col-md-10  container-style ">
            <div id="page-content" class="margembranca "> 

                <div class="col-md-12" >

                    <div class="col-sm-6 col-lg-7" >

                        <label for="inputEmail" class="col-md-2 control-label">Tipo</label>
                        <div class="col-md-9 pull-right">
                            <select class="form-control col-md-" id="tipo" name="tipo">
                                <option value='0'>Selecione</option>
                                <?php foreach ($tiposReconhecimento as $reconhecimento) { ?>
                                    <option value="<?php echo $reconhecimento['descricao']; ?>"><?php echo $reconhecimento['descricao']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-1 pull-right celular" >
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span> 
                            </label>
                        </div>
                    </div> 

                    <div class="col-sm-6 col-lg-7" > <br/>

                        <label for="inputEmail" class="col-md-2 control-label">Reconhecimento</br>/Conquista</label>
                        <div class="col-md-9 pull-right">
                            <input type="text" class="form-control " value=" " id="conquista" name="conquista" placeholder="">
                            <br/>
                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-7" > <br/>

                        <label for="inputEmail" class="col-md-3 control-label">Modo de aferiação</label>

                        <div id='divPorPontos'>
                            <div class="col-md-4 ">
                                <input type="checkbox" id="checkporpontos" value="Por Pontos" name='modoafericao'> Por Pontos
                            </div>


                            <div class="col-md-5">
                                <div class="col-sm-6 col-lg-12">


                                    <div class="col-md-7">
                                        Quantidade de Pontos

                                    </div>
                                    <div class="col-md-2 ">
                                        <input type="number"id="quantidadeponto" name="quantidadeponto"  size="15" maxlength="8" class=''  placeholder=""> 
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 pull-right">
                            <input type="checkbox" id="checkporacoes" value="Por Ações" name='modoafericao'> Por Ações(não sequencias)
                        </div>

                    </div>



                    <div class="col-md-10 corpotabacoes" id='divPorAcoes'>
                        <div id="table-responsive" class="col-lg-10 pull-right tabelap">

                            <table class="tablesorter">
                                <thead>
                                    <tr>
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Selecione as Ações</th>		
                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html" /> </center></td>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($acoestable as $acoestable) {
                                        ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                        <tr>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $acoestable['acoes']; ?></td> <!--ultimo passo , já conferindo no BD-->
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="objsAcoes[]" value='<?php echo $acoestable['id']; ?>'/> </center></td>
                                    </tr>

                                <?php } ?> <!penultimo passo>
                                </tbody>
                            </table>

                        </div>

                    </div>


                    <!-- Linha do checkbox com opções-->
                    <div class='mode-aferiacao-modos row col-md-12'>
                        <div class="col-md-12" id='divPorMissao'>
                            <div class="col-sm-6 col-lg-5 ">
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer"> 
                                        <input type="checkbox" id="checkpormissao" value="Por Missão" name='modoafericao'> Por Missão<br/>
                                    </div> 
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <select class="col-md-5 form-control" id="afericao_missao" name="afericao_missao">
                                    <option value='0'>Selecione a Missão</option>
                                    <?php foreach ($missoes as $missao) { ?>
                                        <option value='<?php echo $missao['id']; ?>'><?php echo $missao['missao']; ?></option>              
                                    <?php } ?>

                                </select> 
                            </div>
                        </div>

                        <div class="col-md-12" id='divPorPrograma'>
                            <br/>
                            <div class="col-sm-6 col-lg-5" >
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer"> 
                                        <input type="checkbox" id="checkporprograma"  value="Por Programa" name='modoafericao'> Por Programa<br/>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <select class="col-md-5 form-control"    id="afericao_programa" name="afericao_programa">
                                    <option>Selecione a Missão</option>
                                    <?php foreach ($programas as $programa) { ?>
                                        <option value='<?php echo $programa['id']; ?>'><?php echo $programa['nome']; ?></option>              
                                    <?php } ?>
                                </select> 
                            </div> 
                        </div>
                        <div class="col-md-12" id='divPorMod'>
                            <br/>
                            <div class="col-sm-6 col-lg-5" >
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer"> 
                                        <input type="checkbox" id="chechpormod" value="Por MOD/PACK" name='modoafericao'> Por MOD/PACK<br/>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <select class="col-md-5 form-control" id="afericao_modpack" name="afericao_modpack">
                                    <option>Selecione a Missão</option>
                                    <?php foreach ($mods as $mod) { ?>
                                        <option id='<?php echo $mod['id']; ?>'><?php echo $mod['titulo'] . ' - ' . $mod['descricao']; ?></option>
                                    <?php } ?>
                                </select> 
                            </div> 
                        </div>
                    </div>
                    <!--FIM da linha do checkbox com opções--> 

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-7" > <br/>

                            <label for="inputEmail" class="col-md-2 control-label">Sobre o</br>/reconhecimento</label>
                            <div class="col-md-9 pull-right">
                                <input type="text" class="form-control " id="reconhecimento" name="reconhecimento" placeholder="">
                                <br/>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-10 ">

                            <label for="inputEmail" class="col-md-2 control-label">Bagde/Imagem</label>
                            <div class="col-md-6 ">
                                <a href="#" class="ico-search">clique aqui para importar outra imagem</a>
                            </div>

                            <div class = "col-md-3" > 
                                <input type="checkbox" id="expira" name="expira"  value="0" class='almos-form-control'> Reconhecimento expira em<br/>
                            </div> 

                            <div class="col-md-1">
                                <input name="nascimento" type="date"  id="month" value=" " class= "textbox70"/>
                            </div>   

                        </div>
                    </div>   

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-7" > <br/>

                            <label for="inputEmail" class="col-md-2 control-label">Mensagem</br>Parabéns</label>
                            <div class="col-md-9 pull-right">
                                <input type="text" class="form-control " id="parabens" name="parabens" placeholder="">
                                <br/>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-10 ">

                            <label for="inputEmail" class="col-md-3 control-label">Conteudo destravado</label>
                            <div class="col-md-6 ">
                                <a href="#" class="ico-search">clique aqui para importar outra imagem</a>
                            </div>


                        </div>
                    </div> 

                    <div class="col-sm-6 col-lg-7" ><br/>

                        <label for="inputEmail" class="col-md-2 control-label">Premiação</label>
                        <div class="col-md-9 pull-right">
                            <select class="form-control col-md-6" id="premiacao" name="premiacao">
                                <option value="1">Selecione o prêmio</option>
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

                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Pontos extras</label>
                            <div class="col-md-2">
                                <input type="text" name="pontosextras" id="pontosextras" size="8" maxlength="8"  placeholder="">
                            </div>
                            <div class = "col-md-7"> 
                                <input type="checkbox" id="pontuaequipe" name="pontuaequipe" value="nome"> Pontua também a(s) Equipes(s) que o usuário/jogador faz parte<br/>
                            </div> 

                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">

                            <label for="inputEmail" class="col-md-2 control-label">Texto p/Log</label>
                            <div class="col-md-3">
                                O usuário/jogador"Fulano"

                            </div>
                            <div class="col-md-6 verbocx">
                                <input type="text" name="textologin" id="textologin" placeholder="entre com um verbo"> "Reconhecimento/Conquistas"
                            </div>
                        </div>

                    </div>

                </div>
                <!-- rodape -->
                <div class="buttons-region text-right">
                    <button type="submit" class="btn btn-primary  btnazul">Salvar</button>
                    <button class="btn btn-deafult">Cancelar</button>

                </div> 
            </div>
        </div>

        <!--esse input serve para a declaração do onoffswitch do status-->
        <input type="hidden" name="status" id="status"/>
        <!--Fim da declaração do input para a declaração do onoffswitch do status-->

    </form>
</body>
<!--FIM container-->