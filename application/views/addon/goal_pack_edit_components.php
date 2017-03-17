<link href="../../assets/css/gaming/Addon.css" rel="stylesheet"/>

<div class="col-md-10 page-body">

    <div class="col-md-12 linha">
        <div class="col-md-2">Objeto</div>
        <div class="col-md-10"><h3 class="label-obj">1º Trimestre</h3></div>
    </div>

    <div class="col-md-12 linha">
        <fieldset class="scheduler-border ">
            <legend class="scheduler-border ">Instrunções para importação de dados</legend>
            <div class="col-md-12">
                <div class="col-md-1 info-symbol">
                    <span class="glyphicon glyphicon-info-sign"></span>
                </div>

                <div class="col-md-9">
                    <p class="fieldset-p">
                        Para importar os dados das Metas, você precisa usar uma planilha-modelo (template) para preencher com todas as informações
                        que o sistema vai utilizar. Algumas informações são obrigatórias (como Cód. Func.), outras opcionais.<br/>
                        Se tiver alguma dúvida, conseulte nossa documentação, clicando <a href="#">aqui</a>.
                    </p>
                    <br/>
                    <div>
                        <div class="col-md-4">Planilha-modelo (template)</div>
                        <div class="col-md-8"><a href="#">clique aqui para baixar a planilha-modelo</a></div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>

    <div class="col-md-12 linha">
        <p class="col-md-12">Meta por Usuário/Jogador</p>
        <div class="pull-right col-md-11">
            <p class="fieldset-p">
                O sistem utiliza o campo COD.FUNCIONARIO como chave única de identificação do Funcionário dentro da base de dados.<br/>
                Para utilizar as informações dos Funcionários já carregadas (exceto excluir), basta indicar o mesmo Código na planilha.
            </p>
            <button class="btn btn-default btn-xs">Carregar planilha com dados</button><br/><br/>

            <p class="auto-small"><i>Cód.Func., Label_Meta_1,Meta_1,Ptos_Meta_1,Label_Metal_2,Meta_2,Ptos_Meta_2....Label_Meta_10,Meta_10,Ptos_Meta_10</i></p>
        </div>
    </div>
    <br/>
    <div class="col-md-12 linha">
        <p class="col-md-12">Meta por Equipe</p>
        <div class="pull-right col-md-11">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Selecione a Equipe</th>
                        <th>Meta 1<br/><span class="auto-small">[label]</span></th>
                        <th>Pontos</th>
                        <th>Meta 2<br/><span class="auto-small">[label]</span></th>
                        <th>Pontos</th>
                        <th>...</th>
                        <th>Meta 10<br/><span class="auto-small">[label]</span></th>
                        <th>Pontos</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="col-md-12 linha text-right">
        <button class="btn btn-default">Cancelar</button>
        <button class="btn btn-primary">Salvar</button>
    </div>
</div>

