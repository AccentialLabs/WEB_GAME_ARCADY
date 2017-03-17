<link href="../../assets/css/gaming/Addon.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/Addon/FaceFactsMinigame.js"></script> 


<div class="col-md-10 page-body">

    <?php if (!empty($this->session->flashdata('cadSucesso'))) { ?>
        <span>
            <div class="alert alert-success" role="alert">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                <?php echo $this->session->flashdata('cadSucesso'); ?>
            </div>
        </span>
    <?php } ?>

    <form  method="post" action="../Addon/cadFaceFactsComponents" >
        <div class="col-md-12 linha">
            <div class="col-md-2">Objeto</div>
            <div class="col-md-10"><h3 class="label-obj">Face Facts</h3></div>
            <input type="hidden" value="Face Facts" name="objeto_desc"/>
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
            <div class="col-md-2">Imagem</div>
            <div class="col-md-8">
                <a href="#">clique aqui para importar uma imagem</a>
                <input type="hidden" name="foto" />
            </div>
        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2">Resposta</div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="ALTERNATIVA" /> Alternativas
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
            </div>

        </div>

        <div class="col-md-12 linha">
            <div class="col-md-2"> Limite de tempo(seg.)</div>
            <div class="col-md-3 text-center"><input type="text" class="form-control" name="limite_tempo" /></div>
            <div class="col-md-3"> <span class="auto-small">Deixe em branco se<br/>não houver limite</span></div>
        </div>

        <div class="col-md-12 linha text-right">
            <button class="btn btn-default" type="reset">Cancelar</button>
            <button class="btn btn-default" type="submit">Salvar</button>
        </div>

    </form>
</div>
