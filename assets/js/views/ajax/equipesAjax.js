/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {

    $("#openModalDelete").fadeOut(0);
    var acaoParaExcluir = '';
    var handle = '';

    /* Aqui muda o status da tela CADASTRAR EQUIPES
     $(".statusCheckbox").click(function() {
     
     alert(id);
     var statusAtual = $(this).attr("value");
     var id = $(this).attr("id");
     
     $.ajax({
     url: '../Equipes/mudaStatusEquipes2',
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
     Fim do código status da tela CADASTRAR EQUIPES*/

    //muda status
    $(".statusCheckbox").click(function() {

        //alert(id);
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Equipes/mudaStatusEquipes',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function(msg) {
                // alert(msg);
            }
        });

    });

    //exclui usuario
    $(".excluirEquipes").click(function() {
        //alert('dad');
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete").click();

    });


    $("#confirmExcluirAcao").click(function() {

        $.ajax({
            url: '../Equipes/deleteEquipes',
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


    $("#aleatorio").change(function() {
        alert('dsds');
        if ($("#aleatorio").is(':checked')) {

            $("#manual-corpo").addClass("disabled-div");
        } else {
            $("#manual-corpo").removeClass("disabled-div");
        }
    });

    $("#manual").change(function() {

        if ($("#manual").is(':checked')) {

            $("#aleatorio-corpo").addClass("disabled-div");
        } else {
            $("#aleatorio-corpo").removeClass("disabled-div");
        }
    });

});

