/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    var contador = 1;
    /**
     * DESCRITIVA
     */
    $("#respdescritiva").change(function() {

        $("#quantidadeatualpremios").val(0);
        $("#quantidadepremios").val(0);

        $("#divQtdMinCaracteres").removeClass("disabled-div");
        $("#divQtdPontos").removeClass("disabled-div");

        $("#divAlternativasTable").addClass("disabled-div");
        $("#divAlternativasShowRespostas").addClass("disabled-div");
        $("#divAlternativasNumTentativas").addClass("disabled-div");
        $("#divAlternativasLimitTempo").addClass("disabled-div");

        $("#alternativas").removeAttr("checked");
    });



    /**
     * ALTERNATIVA
     */
    $("#alternativas").change(function() {

        $("#qtdcaracteres").val(0);
        $("#qtdpontos").val(0);

        $("#divQtdMinCaracteres").addClass("disabled-div");
        $("#divQtdPontos").addClass("disabled-div");

        $("#divAlternativasTable").removeClass("disabled-div");
        $("#divAlternativasShowRespostas").removeClass("disabled-div");
        $("#divAlternativasNumTentativas").removeClass("disabled-div");
        $("#divAlternativasLimitTempo").removeClass("disabled-div");

        $("#respdescritiva").removeAttr("checked");
    });



    AddTableRow = function() {
        var newRow = $("<tr class='listas'>");
        var cols = "";

        cols += '<td><input type="text" value="' + contador + '" class="form-control" name="respostas[' + contador + '][ordem_numero]"/></td>';
        cols += '<td><input type="text" class="form-control" name="respostas[' + contador + '][descricao]" /></td>';
        cols += '<td class="text-center"><input type="checkbox" name="respostas[' + contador + '][certa]"/></td>';
        cols += '<td><select name="respostas[' + contador + '][ganha_perde]" class="form-control"><option val="Nulo">Nulo</option><option val="certa">Certa</option><option val="errada">Errada</option></select></td>';
        cols += '<td><input type="text" class="form-control" name="respostas[' + contador + '][qtd_pontos]"/></td>';
        cols += '<td><span  class = "glyphicon glyphicon-ban-circle"></span></td>';

        newRow.append(cols);
        $("#playlistTable").append(newRow);
        $("#contadorRespostas").val(contador);
        contador++;
        return false;
    };

});

