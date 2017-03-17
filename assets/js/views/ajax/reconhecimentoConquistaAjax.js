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
    $(".statusTipoCheckbox").click(function() {

        //alert(id);
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            //url: '../Reconhecimento/mudaStatusReconhecimento',
            url: '../Reconhecimento/mudaStatusTipoReconhecimento',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            sucesso: function(msg) {
                // alert(sucesso);
            }
        });

    });

    //muda status da tela cadastrar conquista.
    $(".statusCheckbox").click(function() {
        // alert(id);
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Reconhecimento/mudaStatusCadastrarconquista',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function(msg) {
                //alert(msg);
            }
        });
    });
    //FIM, muda status da tela cadastrar conquista.

    //exclui Reconhecimento
    $(".excluirReconhecimento").click(function() {
        //alert('dad');
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete").click();

    });

    $("#confirmExcluirAcao").click(function() {

        $.ajax({
            // url: '../Reconhecimento/deleteReconhecimento',
            url: '../Reconhecimento/deleteTipoReconhecimento',
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