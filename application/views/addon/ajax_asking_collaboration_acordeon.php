<!-- ITEM ACORDEON -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading<?php echo $contador; ?>">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $contador; ?>" aria-expanded="true" aria-controls="collapse<?php echo $contador; ?>">

                <div class="row">
                    <div class="col-md-12"><label for="titulo"> Titulo:</label><input type="text" class="form-control" id="titulo" name="objetos[<?php echo $contador; ?>][titulo]"/></div>
                </div>
            </a>
        </h4>
    </div>
    <div id="collapse<?php echo $contador; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $contador; ?>">
        <div class="panel-body">

            <div class="col-md-12 linha">
                <div class="col-md-2">Dica de Tela</div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="objetos[<?php echo $contador; ?>][dica]" />
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
                        <input type="date" class="form-control" name="objetos[<?php echo $contador; ?>][dt_inicio]" />
                    </div>
                    <div class="col-md-1 text-center">
                        a
                    </div>
                    <div class="col-md-2">
                        <input type="date" class="form-control" name="objetos[<?php echo $contador; ?>][dt_fim]"/>
                    </div>
                    <div class="col-md-1 text-center">
                        das
                    </div>
                    <div class="col-md-2">
                        <input type="hour" class="form-control" name="objetos[<?php echo $contador; ?>][hr_inicio]" />
                    </div>
                    <div class="col-md-1 text-center">
                        às
                    </div>
                    <div class="col-md-2">
                        <input type="hour" class="form-control" name="objetos[<?php echo $contador; ?>][hr_fim]"/>
                    </div>
                </div> 
            </div>

            <div class="col-md-12 linha">
                <div class="col-md-2">Instruções</div>
                <div class="col-md-10">
                    <textarea class="form-control" name="objetos[<?php echo $contador; ?>][instrucoes]"></textarea>
                </div>
            </div>

            <div class="col-md-12 linha">
                <div class="col-md-2">Regras</div>
                <div class="col-md-10">
                    <textarea class="form-control" name="objetos[<?php echo $contador; ?>][regras]"></textarea>
                </div>
            </div>

            <div class="col-md-12 linha">
                <div class="col-md-2">Criador</div>
                <div class="col-md-10">
                    <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="objetos[<?php echo $contador; ?>][limita_participantes]" value="1"> Limitar número de participações</div> 
                    <div class="col-md-3"><input type="text" class="form-control" name="objetos[<?php echo $contador; ?>][qtd_participantes_limitados]"/></div>
                    <div class="col-md-12">
                        <input type="checkbox" id="respdescritiva" name="objetos[<?php echo $contador; ?>][aprovacao_conteudo_obrigatoria]" value="1"> Aprovação obrigatória de conteúdo
                    </div> 

                    <div class="col-md-12">
                        <br/>
                        <div class="col-md-3"><input type="text" class="form-control" name="objetos[<?php echo $contador; ?>][qtd_pontos_por_criacao]"></div> 
                        <div class="col-md-9">pontos pela criação<br/> <span class="auto-small">(estes pontos contarão no Score do Jogo)</span></div>
                    </div> 

                    <div class="col-md-9">
                        <br/>
                        <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="objetos[<?php echo $contador; ?>][reconhecimento_por_ponto]" value="1"><span class="auto-small"> Reconhecimento por pontos</span></div> 
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Pontos" name="objetos[<?php echo $contador; ?>][qtd_pontos_para_reconhecimento]" /></div>

                        <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="objetos[<?php echo $contador; ?>][reconhecimento_por_ranking]" value="DESCRITIVA"><span class="auto-small"> Reconhecimento por Ranking</span></div> 
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Qtd." name="objetos[<?php echo $contador; ?>][qtd_pontuacao_ranking]"/></div>
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

                    <div class="col-md-5"><input type="checkbox" id="respdescritiva" value="1" name="objetos[<?php echo $contador; ?>][reconhecer_participantes]"><span class="auto-small"> Reconhecer participantes</span></div> 
                    <div class="col-md-4">
                        <input type="checkbox" id="respdescritiva" name="objetos[<?php echo $contador; ?>][participantes_reconhecidos]" value="mais bem pontuados"><span class="auto-small"> Mais bem pontuados</span><Br/>
                        <input type="checkbox" id="respdescritiva" name="objetos[<?php echo $contador; ?>][participantes_reconhecidos]" value="todos"><span class="auto-small"> Todos</span>
                    </div> 

                    <div class="col-md-3 text-center">
                        <input type="text" class="form-control-sm" placeholder="Qtd." name="objetos[<?php echo $contador; ?>][qtd_participantes_reconher]"/><span class="auto-small">acime de</span>
                        <input type="text" class="form-control-sm" placeholder="Pontos" name="objetos[<?php echo $contador; ?>][reconhecer_participantes_acima_de]"/>
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
