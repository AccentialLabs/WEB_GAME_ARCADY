/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {

    $("#openModalDelete").fadeOut(0);
    var acaoParaExcluir = '';
    var handle = '';

    //muda status
    $(".statusCheckbox").click(function() {


        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        // alert(id + " " + statusAtual);
        $.ajax({
            url: '../Premio/mudaStatusPremios',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            successo: function(msg) {
                alert(sucesso);
            }
        });
    });

    //exclui premio
    $(".excluirPremio").click(function() {
        // alert('dad');
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete").click();

    });

    $("#confirmExcluirAcao").click(function() {

        $.ajax({
            url: '../Premio/deletePremios',
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


