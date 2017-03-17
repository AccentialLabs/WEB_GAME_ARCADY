   (function($) {

        var contador = 1;

        AddTableRowPrograma = function() {

            $("#playlistTableFooterPrograma").fadeOut(0);

            var parteInicial = '<div class="col-md-12"><div class="col-sm-6 col-lg-9" ><div class="form-group"><label for="inputEmail" class="col-md-3 control-label">Objetivo</label><div class="col-md-9 pull-right"><input type="text" class="form-control " name="data[Rodada][' + contador + '][objetivo]" id="data[Rodada][' + contador + '][objetivo]" placeholder=""></div></div></div></div>' +
                    '<div class="col-md-12"><br/><div class="col-sm-6 col-lg-9" ><div class="form-group"><label for="inputEmail" class="col-md-3 control-label">Pista/Dica</label><div class="col-md-9 pull-right"><input type="text" class="form-control " name="data[Rodada][' + contador + '][pistaDica]" id="data[Rodada][' + contador + '][pistaDica]" placeholder=""></div></div></div></div>' +
                    '<div class="col-md-12"><div class="col-sm-6 col-lg-9" ><div class="form-group"><label for="inputEmail" class="col-md-3 control-label">Imagem</label><div class="col-md-9 pull-right"><a href="#" class="ico-search">clique aqui para importar outra imagem</a></div></div></div></div>' +
                    '<div class="col-md-12"><div class="col-sm-6 col-lg-9" ><label for="inputEmail" class="col-md-3 control-label">Tempo</label><div class="col-md-9 pull-right"><input type="text"  size="2" maxlength="8" name="data[Rodada][' + contador + '][tempo]" id="data[Rodada][' + contador + '][tempo]"/> <small>segundos (deixe em branco para indefinido)</small></div></div></div>' +
                    '<div class="col-md-12 "><div class="col-dm-12" ><div class = "checbox checboxcontainer col-md-5" ><input type="radio"  value="nome" checked> Objetos específicos</div></div></div>';

            /**
             * TABELA DE OBJETOS
             * @type String
             */
            var tabelaIni = ' <div class="col-sm-6 col-lg-12 corpotabobjetos" ><div class="table-responsive"><table class="tablesorter table table-hover">' +
                    '<thead><tr><th>Selecione os Objetos</th><th>Categorias</th><th>Pontos</th><th></th></tr>' +
                    '</thead><tbody>';
            var tabelaMed = '';
            for (i = 0; i < javascript_array.length; i++) {
                console.log(javascript_array[i]);
                tabelaMed += '<tr><td>' + javascript_array[i].descricao + '</td><td class="text-center">' + javascript_array[i].titulo + '</td><td class="text-center">' + javascript_array[i].pontuacao_ponto_medio_acima + '</td><td>' +
                        '<input type="checkbox" name="data[Rodada][' + contador + '][objetos][]" id="data[Rodada][' + contador + '][objetos][]" value="' + javascript_array[i].id + '" /> </td></tr>';
            }
            var tabelaFim = '</tbody></table></div></div>';
            var tabelaObjetos = tabelaIni + tabelaMed + tabelaFim;
            //FIM DA TABELA DE OBJETOS



            /**
             * SELECT - CATEGORIA DE OBJETOS
             */
            var optionsFromSelect = '';
            for (l = 0; l < js_tipocategoria_array.length; l++) {

                optionsFromSelect += '<option id="' + js_tipocategoria_array[l].id + '">' + js_tipocategoria_array[l].titulo + '</option>';
            }
            //FIM DO SELECT - CATEGORIA DE OBJETOS


            var parteFinal = ' <div class="col-md-12"><br /><div class="col-md-12" ><div class="checbox checboxcontainer col-md-4"><input type="radio"  value="nome" checked> Objetos aleatórios</div><div class="col-md-6"><select class="col-md-12" name="data[Rodada][' + contador + '][objetoCategoria]" id="data[Rodada][' + contador + '][objetoCategoria]"><option>Selecione a Categoria</option>' + optionsFromSelect + '</select></div></div></div>' +
                    '<div class="col-md-12"><div class="col-md-12"><label for="inputEmail" class="col-md-3 control-label">Mensagem Parabéns</label><div class="col-md-9 pull-right"><input type="text" class="form-control "name="data[Rodada][' + contador + '][mensagemParabens]" id="data[Rodada][' + contador + '][mensagemParabens]" placeholder=""></div></div></div>';

            var rodada = '<div class="panel-body">' + parteInicial + tabelaObjetos + parteFinal + '</div></div></div></div>';

            var newRow = $("<div class='panel-footer'>");
            var cols = '<div class="panel-heading">Rodada #' + (contador + 1) + ' (ou Rodada única/recorrente) <button onclick="AddTableRowPrograma()" type="button"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span></button></div>' + rodada;
            cols += '<div class="panel-footer">&nbsp </div>';

            // newRow.append(cols);
            $("#playlistTablePrograma").append(cols);
            contador++;
            return false;
        };
    })(jQuery);
    
    //ADD ROW MISSAO
    (function($) {



        var contadorMissao = 1;
       

        AddTableRowMissao = function() {


            var tabelaIni = ' <div class="col-sm-6 col-lg-12 corpotabobjetos" ><div class="table-responsive"><table class="tablesorter table table-hover">' +
                    '<thead><tr><th>Selecione os Objetos</th><th>Categorias</th><th></th></tr>' +
                    '</thead><tbody>';

           var tabelaMed = '';
            for (i = 0; i < javascript_array.length; i++) {
                console.log(javascript_array[i]);
                
                tabelaMed += '<tr><td>'+javascript_array[i].descricao+'</td><td class="text-center">'+javascript_array[i].titulo+'</td><td>'+
                        '<input type="checkbox" name="data[Etapa]['+contadorMissao+'][objetos][]" id="data[Etapa]['+contadorMissao+'][objetos][]" value="'+javascript_array[i].id+'" /> </td></tr>';
            }

            var tabelaFim = '</tbody></table></div></div>';
            
            var tabelaObjetos = tabelaIni+tabelaMed+tabelaFim;
            
             var rodada = '<div class="panel-body">'+tabelaObjetos+'<div class="col-md-12" style="padding-top: 10px; padding-bottom: 10px;"><div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Dica de tela</label><div class="col-md-7"><input type="text" class="form-control col-md-12" name="data[Etapa][' + contadorMissao + '][dicatela][]" id="data[Etapa][' + contadorMissao + '][dicatela][]" placeholder=""></div></div></div><div class="col-md-12">' +
                '<div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Imagem</label><div class="col-md-7 "><a href="#" class="ico-search"><small>clique aqui para importar outra imagem</small></a></div></div>' +
                '</div><div class="col-md-12" style="padding-bottom: 10px;"><div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Data limite</label><div class="col-md-2 "><input  type="date"  name="data[Etapa][' + contadorMissao + '][datalimite][]" id="data[Etapa][' + contadorMissao + '][datalimite][]" value=" " class= "form-control textbox70"/></div></div></div>' +
                '<div class="col-md-12" style="padding-bottom: 10px;"><div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Hora limite</label><div class="col-md-1 "><input type="text" class="form-control col-md-4"  name="data[Etapa][' + contadorMissao + '][horalimite][]" id="data[Etapa][' + contadorMissao + '][horalimite][]" placeholder="00:00"></div></div></div>' +
                '<div class="col-md-12" style="padding-bottom: 10px;"><div class="form-group" ><label for="inputEmail" class="col-md-4 control-label">Mensagem Parabéns</label><div class="col-md-8 pull-right"><input type="text" class="form-control " name="data[Etapa][' + contadorMissao + '][mensagemparabens][]" id="data[Etapa][' + contadorMissao + '][mensagemparabens][]"  placeholder=""></div></div></div>' +
                '<div class="col-md-12" ><div class="form-group"><label for="inputEmail" class="col-md-4 control-label">Conteúdo destravado</label><div class="col-md-7 "><a href="#" class="ico-search"><small>Clique aquí para importar conteúdo</small></a></div></div></div></div> ';

            var newRow = $("<div class='panel-footer'>");
            var cols = '<div class="panel-heading">Rodada #' + (contadorMissao + 1) + ' (ou Rodada única/recorrente) <button onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span></button></div>' + rodada;
            cols += '<div class="panel-footer">&nbsp </div>';

            // newRow.append(cols);
            $("#playlistTableMissao").append(cols);
            contadorMissao++;
            return false;
        };
    })(jQuery);


