/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {


    /**
     * Não remove registro do banco de dados, muda o status para 2
     */
    $(".excluir").click(function() {
        // alert('dsd');
        var handle = $(this);
        var id = $(this).attr("id");

        $.ajax({
            url: '../Addon/deleteMod',
            type: 'POST',
            data: {
                id: id
            },
            success: function(msg) {

                var tr = $(handle).closest('tr');
                tr.fadeOut(600, function() {
                    tr.remove();
                });

            }
        });
    });

    /**
     * Ativa ou desativa registro de acordo com o status atual
     */
    $(".statusCheckbox").click(function() {

        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");
        $.ajax({
            url: '../Addon/mudaStatusMod',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function(msg) {

            }
        });

    });

});


