/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function() {

    //muda status
    /* Aqui muda o status da tela CADASTRAR EQUIPES*/
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

    $("#aleatorio").change(function() {
        if ($("#aleatorio").is(':checked')) {

            $("#manual-corpo").addClass("disabled-div");
            $("#campos-cadastro-corpo").addClass("disabled-div");
        } else {
            $("#manual-corpo").removeClass("disabled-div");
            $("#campos-cadastro-corpo").removeClass("disabled-div");
        }
    });

    $("#manual").change(function() {

        if ($("#manual").is(':checked')) {

            $("#aleatorio-corpo").addClass("disabled-div");
            $("#campos-cadastro-corpo").addClass("disabled-div");
        } else {
            $("#aleatorio-corpo").removeClass("disabled-div");
            $("#campos-cadastro-corpo").removeClass("disabled-div");
        }
    });
    
     $("#cadastro").change(function() {

        if ($("#cadastro").is(':checked')) {

            $("#aleatorio-corpo").addClass("disabled-div");
            $("#manual-corpo").addClass("disabled-div");
        } else {
            $("#aleatorio-corpo").removeClass("disabled-div");
            $("#manual-corpo").removeClass("disabled-div");
        }
    });
    /* Fim do código status da tela CADASTRAR EQUIPES*/
});

