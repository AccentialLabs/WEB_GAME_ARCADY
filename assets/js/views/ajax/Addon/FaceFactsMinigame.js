/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    var contador = 1;
      
     AddTableRow = function() {
        var newRow = $("<tr class='listas'>");
        var cols = "";

        cols += '<td><input type="text" value="' + contador + '" class="form-control form-control-sm text-center"/></td>';
        cols += '<td><input type="text" class="form-control" name="respostas[' + contador + '][descricao]" /></td>';
        cols += '<td><a href="#" class="auto-small">Selecionar foto</a></td>';
        cols += '<td><input type="checkbox" class="form-control" value="1" name="respostas[' + contador + '][certa]"/></td>';
        cols += '<td><select class="form-control" name="respostas[' + contador + '][ganha_perde]"><option value="ganha">ganha</option><option value="perde">perde</option></select></td>';
        cols += '<td><input type="text" class="form-control form-control-sm text-center" name="respostas[' + contador + '][pontos]"/></td>';
        cols += '<td><span  class = "glyphicon glyphicon-ban-circle"></span></td>';
        newRow.append(cols);
        
        $("#respostastabela").append(newRow);
         //$("#contadorRespostas").val(contador);
        contador++;
        return false;
    };
});


