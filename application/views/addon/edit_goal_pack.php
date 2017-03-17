<link href="../../assets/css/gaming/Addon.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/Addon/GoalPack.js"></script> 
<div class="col-md-10 page-body">

    <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
        <span>
            <div class="alert alert-success" role="alert">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                <?php echo $this->session->flashdata('cadSucesso'); ?>
            </div>
        </span>
    <?php } ?>

    <form method="POST" action="../Addon/cadGoalPack">
        <div class="col-md-12 linha">
            <div class="col-md-2">MOD/Pack</div>
            <div class="col-md-10"><h3 class="label-obj">Goal Pack</h3></div>
            <input type="hidden" name="titulo" value="Goal Pack" />
            <input type="hidden" value="Goal Pack" />
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
                                    1º Trimestre
                                    <input type="hidden" name="trimestre[0][titulo]" value="1º Trimestre"/>
                                </a>
                            </h4>
                        </div>


                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Dica de Tela</div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="trimestre[0][dica]" />
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Imagem</div>
                                    <div class="col-md-10">
                                        <a href="#">clique aqui para importar outra imagem</a>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Vigência</div>
                                    <div class="col-md-10">
                                        <div class="col-md-2">
                                            <input type="date" class="form-control" name="trimestre[0][dt_inicio]"/>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            a
                                        </div>
                                        <div class="col-md-2">
                                            <input type="date" class="form-control" name="trimestre[0][dt_fim]"/>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            das
                                        </div>
                                        <div class="col-md-2">
                                            <input type="hour" class="form-control" name="trimestre[0][hr_inicio]"/>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            às
                                        </div>
                                        <div class="col-md-2">
                                            <input type="hour" class="form-control" name="trimestre[0][hr_fim]"/>
                                        </div>
                                    </div> 
                                </div>


                                <div class="col-md-12 linha">
                                    <div class="col-md-12">
                                        <input type="checkbox" id="respdescritiva" name="trimestre[0][meta_geral]" value="1"><span class="auto-small"> Meta geral(para todos os Usuários/Jogadores cadastrados)</span>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-6">
                                        <input type="checkbox" id="respdescritiva" name="trimestre[0][meta_por_usuario]" value="1"><span class="auto-small"> Meta por Usuário/Jogador</span><br/>
                                        <input type="checkbox" id="respdescritiva" name="trimestre[0][meta_por_equipe]" value="1"><span class="auto-small"> Meta por Equipe</span>
                                    </div>

                                    <div class="col-md-6 text-center">
                                        <button class="btn btn-default btn-xs">Valores não definidos. Clique aqui<br/> para entrar/importar metas</button>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Mensagem atingimento</div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="trimestre[0][mensagem_atingimento]"/>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Certificado atingimento</div>
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

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Resultado</div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="trimestre[0][resultado]"/>

                                        <div class="col-md-12">
                                            <br/>
                                            <input type="checkbox" id="respdescritiva" name="trimestre[0][sumariza_por_grupo]" value="1"> Sumariza por Grupo
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="respdescritiva" name="trimestre[0][comparacao_de_perfomance]" value="1"> Permite comparação de performance do usuário/jogador com demais da mesma Equipe/Empresa
                                        </div>
                                        <div class="col-md-12">
                                            <br />
                                            <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="trimestre[0][new_tablecolgrafico_de_resumo]" value="1"> <span class="auto-small">Mostrar gráfico de resumo/total</span></div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="trimestre[0][tipo_grafico_de_resumo]">
                                                    <option>Selecione o tipo de gráfico</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <br/>
                                            <div class="col-md-6"><input type="checkbox" id="respdescritiva"name="trimestre[0][grafico_comparativo]" value="1"><span class="auto-small"> Mostrar gráfico comparativo de performance</span></div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="trimestre[0][tipo_grafico_comparativo]">
                                                    <option>Selecione o tipo de gráfico</option>
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
                    <div class="panel panel-default div-plus-btn" >
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <button class="btn btn-default" id="btn-mais" onclick="insereTrimestre()"><span class="glyphicon glyphicon-plus"></span></button>
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
