/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {

    $("#openModalDelete").fadeOut(0);
    var acaoParaExcluir = '';
    var handle = '';
    
    //muda status da tela CADASTRAR MISSOES
    $(".statusCheckbox").click(function () {
        
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
           url: '../Missoes/mudaStatusCadastrarmissoes',
           // url: '../Missoes/mudaStatusMissoes',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function (msg) {
                 
            }
        });

    });// fIMmuda status da tela CADASTRAR MISSOES
    
    //muda status
    $(".statusCheckboxLista").click(function () {
        
        // alert(id);
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Missoes/mudaStatusMissoes',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function (msg) {
                
            }
        });

    });

    //exclui misssão
    $(".excluirMissao").click(function () {

        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete").click();

    });
    
    $("#confirmExcluirAcao").click(function() {
 
        $.ajax({ 
            url: '../Missoes/deleteMissoes',
            type: 'POST',
            data: {
                id: acaoParaExcluir
            },
            success: function(msg) {

              var tr = $(handle).closest('tr');
                tr.fadeOut(600, function() {
                    tr.remove();
                });

            $('#myModalDeleteAcao').modal('toggle');
            $('#myModalDeleteAcao').modal('hide');


            }
        });

    });

});
