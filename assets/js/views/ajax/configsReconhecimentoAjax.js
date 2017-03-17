/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
  
    var contador = 0;
    
    $("#openModalDelete3").fadeOut(0);
     var acaoParaExcluir = '';
     var handle = '';
     
    //muda status
    $(".statusCheckbox").click(function() {
       
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");
        
        $.ajax({
            url: '../Configuracoes/mudaStatusReconhecimento',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
           success: function(msg) {
                alert(msg);
           }
        });
    });
    
    //exclui usuario
    $(".excluirReconhecimento").click(function() {
        
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete3").click();

    });
    
     $("#confirmExcluirAcao3").click(function() { //quando muda o "ExcluirAcao"ele não exclui.
 
        $.ajax({ 
            url: '../Configuracoes/deleteReconhecimento',
            type: 'POST',
            data: {
                id: acaoParaExcluir
            },
            success: function(msg) {

               var tr = $(handle).closest('tr');
                tr.fadeOut(600, function() {
                    tr.remove();
                });

            $('#myModalDeleteAcao3').modal('toggle');
            $('#myModalDeleteAcao3').modal('hide');

            }
        });

    });
    
      AddTableRow2 = function(){
        var newRow = $("<tr class='listas'>");
        var cols = "";
        
        if (contador == 0) {
            
            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" class="form-control" placeholder="Descrição" id="addNome' + contador + '"</td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman2").append(newRow);
            return false;
        } else {
            var addDescricao = $("#addNome" + contador).val();
            
            addReconhecimentotb (addDescricao);
            
             contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" class="form-control" placeholder="Descrição" id="addNome' + contador + '"</td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman2").append(newRow);
            return false;
        }
    };
        
});

  
    function addReconhecimentotb(descricao) {

    $.ajax({
        url: '../Configuracoes/insertReconhecimentotb',
        type: 'POST',
        data: {
            descricao: descricao,
            status: 1
        },
        success: function(msg) {
            
        }
    });

}