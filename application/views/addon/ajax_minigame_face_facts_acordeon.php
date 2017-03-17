<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading<?php echo $contador; ?>">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $contador; ?>" aria-expanded="true" aria-controls="collapse<?php echo $contador; ?>">
                Teste de Competência
            </a>
        </h4>
    </div>
    <div id="collapse<?php echo $contador; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $contador; ?>">
        <div class="panel-body">

            <div class="col-md-12 linha">
                <div class="col-md-2">Dica de Tela</div>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="rodada[<?php echo $contador; ?>][dicatela]" name="rodada[<?php echo $contador; ?>][dicatela]" />
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
                    <input type="checkbox" id="rodada[<?php echo $contador; ?>][permiteusuariopraticar]" name="rodada[<?php echo $contador; ?>][permiteusuariopraticar]" value='1'><span class="auto-small"> Permite usuário/jogador praticar</span>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="rodada[<?php echo $contador; ?>][permiteusuariopraticar_qtd]" name="rodada[<?php echo $contador; ?>][permiteusuariopraticar_qtd]" />
                </div>
                <div class="col-md-1">
                    vez(es)
                </div>
                <div class="col-md-5 text-right">
                    <button class="btn btn-default btn-sm">Importar planilha</button>
                </div>
            </div>

            <div class="col-md-12 linha">
                <div class="col-md-2">Componentes</div>
                <div class="col-md-10">
                    <div class="col-md-4">
                        <input type="radio" id="rodada[<?php echo $contador; ?>][tipoliberacomponentes]" name="rodada[<?php echo $contador; ?>][tipoliberacomponentes]" value="TODOS"> Todos<br/><br/>
                        <input type="radio" id="rodada[<?php echo $contador; ?>][tipoliberacomponentes]" name="rodada[<?php echo $contador; ?>][tipoliberacomponentes]" value="PARCIAL"> Parcial (aleatório)
                    </div>
                    <div class='col-md-6'>
                        <input type="checkbox" id="rodada[<?php echo $contador; ?>][apresentacomponentesalfabeticamente]" name="rodada[<?php echo $contador; ?>][apresentacomponentesalfabeticamente]" value='1'><span class="auto-small"> Apresenta Componentes em ordem aleatória</span>

                        <div class='col-md-9'><br/><input type='text' class='form-control input-group-sm' placeholder="Qtd." id="rodada[<?php echo $contador; ?>][liberacomponentes_qtd]" name="rodada[<?php echo $contador; ?>][liberacomponentes_qtd]"  />
                        </div>
                    </div>
                </div>

                <div class="col-md-12 linha">
                    <div class="col-md-2">Aprovação</div>
                    <div class="col-md-10">
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="rodada[<?php echo $contador; ?>][aprovacaopontos]" name="rodada[<?php echo $contador; ?>][aprovacaopontos]"/>
                        </div>
                        <div class="col-md-9">
                            pontos<br/><span class="auto-small"> (estes pontos contarão no Score do jogo)</span>
                        </div>

                        <div class="col-md-12 linha">
                            <div class="col-md-2">Mensagem</div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="rodada[<?php echo $contador; ?>][mensagem]" name="rodada[<?php echo $contador; ?>][mensagem]"/>
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
                    <div class="col-md-2">Vidas totais</div>
                    <div class="col-md-10">
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="rodada[<?php echo $contador; ?>][vidastotais]" name="rodada[<?php echo $contador; ?>][vidastotais]"/>
                        </div>
                        <div class="col-md-10">
                            <div class='col-md-12'>
                                <div class='col-md-3'><span class='auto-small'>Perde a vida a cada</span></div>
                                <div class='col-md-3'><input type='text' class='form-control' id="rodada[<?php echo $contador; ?>][perdeavida_respostaserradas_qtd]" name="rodada[<?php echo $contador; ?>][perdeavida_respostaserradas_qtd]"/></div>
                                <div class='col-md-6'>respostas erradas</div>
                            </div>
                            <br/>
                            <br/>
                            <div class='col-md-12'>
                                <div class='col-md-3'><span class='auto-small'>Ganha a vida a cada</span></div>
                                <div class='col-md-3'><input type='text' class='form-control'  id="rodada[<?php echo $contador; ?>][ganhavida_respostascertas_qtd]" name="rodada[<?php echo $contador; ?>][ganhavida_respostascertas_qtd]"/></div>
                                <div class='col-md-6'>respostas certas</div>
                            </div>
                        </div>
                    </div>
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