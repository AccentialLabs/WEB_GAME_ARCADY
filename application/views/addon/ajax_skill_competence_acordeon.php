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
                    <input type="text" class="form-control" id="rodadas[<?php echo $contador; ?>][dicatela]" name="rodadas[<?php echo $contador; ?>][dicatela]" />
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
                    <input type="text" class="form-control" id="rodadas[<?php echo $contador; ?>][permiteusuariopraticar_qtd]" name="rodadas[<?php echo $contador; ?>][permiteusuariopraticar_qtd]"/>
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
                        <input type="text" class="form-control" id="rodadas[<?php echo $contador; ?>][aprovacaopontos]" name="rodadas[<?php echo $contador; ?>][aprovacaopontos]"/>
                    </div>
                    <div class="col-md-9">
                        pontos<br/><span class="auto-small"> (estes pontos contarão no Score do jogo)</span>
                    </div>

                    <div class="col-md-12 linha">
                        <div class="col-md-2">Mensagem</div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="rodadas[<?php echo $contador; ?>][mensagem]" name="rodadas[<?php echo $contador; ?>][mensagem]"/>
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
                    <input type="text" class="form-control"  id="rodadas[<?php echo $contador; ?>][resultado]" name="rodadas[<?php echo $contador; ?>][resultado]"/>

                    <div class="col-md-12">
                        <br/>
                        <input type="checkbox" id="rodadas[<?php echo $contador; ?>][sumarizagrupo]" name="rodadas[<?php echo $contador; ?>][sumarizagrupo]"> Sumariza por Grupo
                    </div>
                    <div class="col-md-12">
                        <input type="checkbox" id="rodadas[<?php echo $contador; ?>][permitecompararperformance]" name="rodadas[<?php echo $contador; ?>][permitecompararperformance]"> Permite comparação de performance do usuário/jogador com demais da mesma Equipe/Empresa
                    </div>
                    <div class="col-md-12">
                        <br />
                        <div class="col-md-6"><input type="checkbox" id="rodadas[<?php echo $contador; ?>][mostragraficoresumo]" name="rodadas[<?php echo $contador; ?>][mostragraficoresumo]"> <span class="auto-small">Mostrar gráfico de resumo/total</span></div>
                        <div class="col-md-6">
                            <select class="form-control" id="rodadas[<?php echo $contador; ?>][mostragrafico_tipografico]" name="rodadas[<?php echo $contador; ?>][mostragrafico_tipografico]">
                                <option value='0'>Selecione o tipo de gráfico</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <br/>
                        <div class="col-md-6"><input type="checkbox"  id="rodadas[<?php echo $contador; ?>][motragraficocomparativoperformance]" name="rodadas[<?php echo $contador; ?>][motragraficocomparativoperformance]"><span class="auto-small"> Mostrar gráfico comparativo de performance</span></div>
                        <div class="col-md-6">
                            <select class="form-control" id="rodadas[<?php echo $contador; ?>][mostragraficoperformance_tipografico]" name="rodadas[<?php echo $contador; ?>][mostragraficoperformance_tipografico]">
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