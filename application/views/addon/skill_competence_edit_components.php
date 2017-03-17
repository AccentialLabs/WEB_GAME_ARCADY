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
    <form  method="post" action="../Addon/cadSkillCompetenceComponents" >
        <div class="col-md-12 linha">
            <div class="col-md-2">Objeto</div>
            <div class="col-md-10"><h3 class="label-obj">Teste de Competência</h3></div>
            <input type="hidden" name="objeto_desc" value="Teste de Competência" />
        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2">Grupo</div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="grupo_desc"/>
            </div>
            <div class="col-md-4">
                <i class="auto-small">Grupos agrupam componentes</i>
            </div>
        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2">Componentes</div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="componente_desc"/>
            </div>
        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2">Resposta</div>
            <!-- Resposta descritiva -->
            <div class="col-md-8">
                <div class="col-md-12">
                    <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"> Descritiva
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <input type="checkbox" id="obrigatorio" name="resposta_descritiva_obrigatorio" value="1"> Obrigatório?
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-4 label-no-padding">Qtd. mín. caracteres</div>
                            <div class="col-md-5"><input type="text" class="form-control" name="resposta_descritiva_qtd_caracter"/></div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1 label-no-padding">Pontos</div>
                            <div class="col-md-2"><input type="text" class="form-control" name="resposta_descritiva_pontos"/></div>
                        </div>
                    </div>
                </div>

                <!-- Resposta Alternativa -->
                <div class="col-md-12">
                    <br/>
                    <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"> Alternativas
                    <div class="col-md-12">
                        <table class="table table-hover table-striped" id="respostastabela">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">#</th>
                                    <th>Respostas</th>
                                    <th>Imagem</th>
                                    <th>Certa</th>
                                    <th>Ganha/perde</th>
                                    <th style="width: 10%;">Pontos</th>
                                    <th><input type="checkbox" class="form-control" /></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0</td>
                                    <td><input type="text" class="form-control" name="respostas[0][descricao]" /></td>
                                    <td><a href="#" class="auto-small">Selecionar foto</a></td>
                                    <td><input type="checkbox" class="form-control" name="respostas[0][certa]" value='1'/></td>
                                    <td><select class="form-control" name="respostas[0][ganha_perde]"><option value='ganha'>ganha</option><option value="perde">perde</option></select></td>
                                    <td><input type="text" class="form-control" name="respostas[0][pontos]"/></td>
                                    <td><span class="glyphicon glyphicon-ban-circle"></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-default pull-right" onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                    <div class="col-md-12">
                        <input type="checkbox" id="respdescritiva" name="resposta_alternativa_mostra_correta" value="1"> Mostrar resposta(s) correta(s)
                    </div>
                </div>

                <!-- Resposta Alternativa -->
                <div class="col-md-12">
                    <br/>
                    <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="ESCALA"> Escala
                    <br/><br/>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <div class="col-md-4 label-no-padding"><span class="auto-small">Valor Inicial/mín.</span></div>
                            <div class="col-md-8"><input type="text" class="col-md-12 form-control" name="resposta_escala_valor_minimo"/></div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-md-4 label-no-padding"><span class="auto-small">Incremento</span></div>
                            <div class="col-md-8"><input type="text" class="col-md-12 form-control" name="resposta_escala_valor_incremento"/></div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-md-8"><input type="text" class="col-md-12 form-control" /></div>
                            <div class="col-md-4 label-no-padding"><span class="auto-small">Valor final/max.</span></div>
                        </div>
                    </div>

                    <br />
                    <br />
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="resposta_escala_label_inicial" />
                        </div>

                        <div class="col-md-10 text-center" style="background: #ccc;">
                            -
                        </div>

                        <div class="col-md-1">
                            <input type="text" class="form-control" name="resposta_escala_label_final" />
                        </div>
                    </div>


                    <br />
                    <br />
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <input type="checkbox" id="respdescritiva" name="resposta_escala_pontuacao_ponto_medio" value="1"> Pontuação por ponto Médio
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-3 label-no-padding">ABAIXO</div>
                            <div class="col-md-9"><input type="text" class="col-md-12 form-control" name="resposta_escala_pontuacao_ponto_medio_abaixo"/></div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-9"><input type="text" class="col-md-12 form-control" name="resposta_escala_pontuacao_ponto_medio_acima"/></div>
                            <div class="col-md-3 label-no-padding">ACIMA</div>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="respdescritiva" name="resposta_escala_pontuacao_conforme_escala" value="1"> Pontuação conforme Escala
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2"> Limite de tempo(seg.)</div>
            <div class="col-md-3 text-center"><input type="text" class="form-control" name="limite_tempo" /></div>
            <div class="col-md-3"> <span class="auto-small">Deixe em branco se não houver limite</span></div>
        </div>

        <div class="col-md-12 linha text-right">
            <button class="btn btn-default" type="reset">Cancelar</button>
            <button class="btn btn-default" type="submit">Salvar</button>
        </div>
    </form>
</div>

