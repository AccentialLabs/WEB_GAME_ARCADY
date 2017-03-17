<link href="../../assets/css/gaming/Addon.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/Addon/AskingForCollaboration.js"></script>

<div class="col-md-10 page-body">

    <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
        <span>
            <div class="alert alert-success" role="alert">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                <?php echo $this->session->flashdata('cadSucesso'); ?>
            </div>
        </span>
    <?php } ?>

    <form method="POST" action="../Addon/cadAskForCollaboration">
        <div class="col-md-12 linha">
            <div class="col-md-2">MOD/Pack</div>
            <div class="col-md-10"><h3 class="label-obj">EBS - Asking for collaboration</h3></div>
            <input type="hidden" name="titulo" value="EBS - Asking for collaboration" />
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
                                    <div class="row">
                                        <div class="col-md-12"><label for="titulo"> Titulo:</label><input type="text" class="form-control" id="titulo" name="objetos[0][titulo]"/></div>
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Dica de Tela</div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="objetos[0][dica]" />
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
                                            <input type="date" class="form-control" name="objetos[0][dt_inicio]" />
                                        </div>
                                        <div class="col-md-1 text-center">
                                            a
                                        </div>
                                        <div class="col-md-2">
                                            <input type="date" class="form-control" name="objetos[0][dt_fim]"/>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            das
                                        </div>
                                        <div class="col-md-2">
                                            <input type="hour" class="form-control" name="objetos[0][hr_inicio]" />
                                        </div>
                                        <div class="col-md-1 text-center">
                                            às
                                        </div>
                                        <div class="col-md-2">
                                            <input type="hour" class="form-control" name="objetos[0][hr_fim]"/>
                                        </div>
                                    </div> 
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Instruções</div>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="objetos[0][instrucoes]"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Regras</div>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="objetos[0][regras]"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Criador</div>
                                    <div class="col-md-10">
                                        <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="objetos[0][limita_participantes]" value="1"> Limitar número de participações</div> 
                                        <div class="col-md-3"><input type="text" class="form-control" name="objetos[0][qtd_participantes_limitados]"/></div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="respdescritiva" name="objetos[0][aprovacao_conteudo_obrigatoria]" value="1"> Aprovação obrigatória de conteúdo
                                        </div> 

                                        <div class="col-md-12">
                                            <br/>
                                            <div class="col-md-3"><input type="text" class="form-control" name="objetos[0][qtd_pontos_por_criacao]"></div> 
                                            <div class="col-md-9">pontos pela criação<br/> <span class="auto-small">(estes pontos contarão no Score do Jogo)</span></div>
                                        </div> 

                                        <div class="col-md-9">
                                            <br/>
                                            <div class="col-md-6"><input type="radio" id="tiporeconhecimento" name="objetos[0][tiporeconhecimento]" value="POR_PONTO"><span class="auto-small"> Reconhecimento por pontos</span></div> 
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Pontos" name="objetos[0][qtd_pontos_para_reconhecimento]" /></div>

                                            <div class="col-md-6"><input type="radio" id="tiporeconhecimento" name="objetos[0][tiporeconhecimento]" value="POR_RANKING"><span class="auto-small"> Reconhecimento por Ranking</span></div> 
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Qtd." name="objetos[0][qtd_pontuacao_ranking]"/></div>
                                        </div>
                                        <div class="col-md-3 text-center">
                                            <br/><br/>
                                            <p class="auto-small">A criação de um Reconhecimento é obrigatório.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 linha">
                                    <div class="col-md-2">Formas de Interaçao</div>
                                    <div class="col-md-10">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Pontos Participantes</th>
                                                    <th>Pontos Criador</th>
                                                    <th>Ativo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Apoios/ Votos</td>
                                                    <td>Pontos Participantes</td>
                                                    <td>Pontos Criador</td>
                                                    <td><input type="checkbox" /></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="col-md-5"><input type="checkbox" id="respdescritiva" value="1" name="objetos[0][reconhecer_participantes]"><span class="auto-small"> Reconhecer participantes</span></div> 
                                        <div class="col-md-4">
                                            <input type="checkbox" id="respdescritiva" name="objetos[0][participantes_reconhecidos]" value="mais bem pontuados"><span class="auto-small"> Mais bem pontuados</span><Br/>
                                            <input type="checkbox" id="respdescritiva" name="objetos[0][participantes_reconhecidos]" value="todos"><span class="auto-small"> Todos</span>
                                        </div> 

                                        <div class="col-md-3 text-center">
                                            <input type="text" class="form-control-sm" placeholder="Qtd." name="objetos[0][qtd_participantes_reconher]"/><span class="auto-small">acime de</span>
                                            <input type="text" class="form-control-sm" placeholder="Pontos" name="objetos[0][reconhecer_participantes_acima_de]"/>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 linha text-right">
                                    <br />
                                    <button class="btn btn-default">Criar Reconhecimento</button>
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
                                    <button class="btn btn-default" onclick="insereRowAcordeon()"><span class="glyphicon glyphicon-plus"></span></button>
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

