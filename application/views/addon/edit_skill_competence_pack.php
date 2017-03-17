<link href="../../assets/css/gaming/Addon.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/Addon/SkillAndCompetence.js"></script>

<div class="col-md-10 page-body">

    <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
        <span>
            <div class="alert alert-success" role="alert">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                <?php echo $this->session->flashdata('cadSucesso'); ?>
            </div>
        </span>
    <?php } ?>

    <form action="../Addon/cadSkillCompetencePack" method="POST">
        <div class="col-md-12 linha">
            <div class="col-md-2">MOD/Pack</div>
            <div class="col-md-10"><h3 class="label-obj">Skill and Competence Pack</h3></div>
            <input type="hidden" name="titulo" value="Skill and Competence Pack" />
        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2">Localização</div>
            <div class="col-md-6">
                <select class="form-control" name="localizacao">
                    <option>Tag de localização na interface - PositionTag1</option>
                    <option value="posicao 1">Position 1</option>
                    <option value="posicao 2">Position 2</option>
                    <option value="posicao 3">Position 3</option>
                </select>
            </div>
        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2">Descrição</div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="descricao"/>
            </div>
        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2">Objeto(s)</div>
            <div class="col-md-8">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <!-- ITEM ACORDEON -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Teste de Competência
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Dica de Tela</div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="rodadas[0][dicatela]" name="rodadas[0][dicatela]"/>
                                    </div>
                                </div>


                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Imagem</div>
                                    <div class="col-md-10">
                                        <a href="#">clique aqui para importar outra imagem</a>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th class='text-left'>Componentes</th>
                                                <th>Grupo</th>
                                                <th>Ativo</th>
                                                <th><input type="checkbox" /></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($componentes as $componente) { ?>
                                                <tr>
                                                    <td class='text-left'><?php echo $componente['componente_desc']; ?></td>
                                                    <td><?php echo $componente['grupo_desc']; ?></td>
                                                    <td> <input type="checkbox"  checked='checked'/></td>
                                                    <td><span class="glyphicon glyphicon-ban-circle"></span></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-4">
                                        <input type="checkbox" ><span class="auto-small"> Permite usuário/jogador praticar</span>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="rodadas[0][permiteusuariopraticar_qtd]" name="rodadas[0][permiteusuariopraticar_qtd]"/>
                                    </div>
                                    <div class="col-md-1">
                                        vez(es)
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <button class="btn btn-default btn-sm">Importar planilha</button>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Aprovação</div>
                                    <div class="col-md-10">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" id="rodadas[0][aprovacaopontos]" name="rodadas[0][aprovacaopontos]"/>
                                        </div>
                                        <div class="col-md-9">
                                            pontos<br/><span class="auto-small"> (estes pontos contarão no Score do jogo)</span>
                                        </div>

                                        <div class="col-md-12 linha">
                                            <div class="col-md-2">Mensagem</div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="rodadas[0][mensagem]" name="rodadas[0][mensagem]"/>
                                            </div>
                                        </div>

                                        <div class="col-md-12 linha">
                                            <div class="col-md-2">Certificado</div>
                                            <div class="col-md-10">
                                                <a href="#">clique aqui para selecionar/importar template de certificado</a>
                                            </div>
                                        </div>

                                        <div class="col-md-12 linha">
                                            <div class="col-md-2">Conteúdo destravado</div>
                                            <div class="col-md-10">
                                                <a href="#">clique aqui para selecionar/importar conteúdo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Resultado</div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="rodadas[0][resultado]" name="rodadas[0][resultado]"/>

                                        <div class="col-md-12">
                                            <br/>
                                            <input type="checkbox" id="rodadas[0][sumarizagrupo]" name="rodadas[0][sumarizagrupo]"> Sumariza por Grupo
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="rodadas[0][permitecompararperformance]" name="rodadas[0][permitecompararperformance]"> Permite comparação de performance do usuário/jogador com demais da mesma Equipe/Empresa
                                        </div>
                                        <div class="col-md-12">
                                            <br />
                                            <div class="col-md-6"><input type="checkbox" id="rodadas[0][mostragraficoresumo]" name="rodadas[0][mostragraficoresumo]"> <span class="auto-small">Mostrar gráfico de resumo/total</span></div>
                                            <div class="col-md-6">
                                                <select class="form-control" id="rodadas[0][mostragrafico_tipografico]" name="rodadas[0][mostragrafico_tipografico]">
                                                    <option value='0'>Selecione o tipo de gráfico</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <br/>
                                            <div class="col-md-6"><input type="checkbox" id="rodadas[0][motragraficocomparativoperformance]" name="rodadas[0][motragraficocomparativoperformance]"><span class="auto-small"> Mostrar gráfico comparativo de performance</span></div>
                                            <div class="col-md-6">
                                                <select class="form-control" id="rodadas[0][mostragraficoperformance_tipografico]" name="rodadas[0][mostragraficoperformance_tipografico]">
                                                    <option value='0'>Selecione o tipo de gráfico</option>
                                                </select>
                                            </div>
                                            <br/><br/>
                                        </div>

                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Perfil</th>
                                                    <th>Exportar Excel</th>
                                                    <th>Imprimir</th>
                                                    <th>Vizualizar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Administrador</td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- FIM ITEM ACORDEON -->

                    <!-- PLUS -->
                    <div class="panel panel-default div-plus-btn">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <button class="btn btn-default div-plus-btn" onclick="insereRowAcordeon()"><span class="glyphicon glyphicon-plus"></span></button>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                            </div>
                        </div>
                    </div>
                    <!-- END PLUS  -->

                </div>
            </div>
        </div>


        <div class="col-md-12 linha text-right">
            <button class="btn btn-default">Cancelar</button>
            <button class="btn btn-default">Salvar e criar Ação</button>
            <br/><br/>
        </div>
    </form>
</div>
