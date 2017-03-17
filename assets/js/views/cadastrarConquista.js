/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {

    $("#myonoffswitch").change(function() {

        if ($(this).is(':checked')) {
            $("#status").val(1);
        } else {
            $("#status").val(0);
        }
        ;

    });


    /**
     * POR PONTOS
     */
    $("#checkporpontos").change(function() {

        if ($('#checkporpontos').is(':checked')) {
            $("#divPorAcoes").addClass("disabled-div");
            $("#divPorMissao").addClass("disabled-div");
            $("#divPorPrograma").addClass("disabled-div");
            $("#divPorMod").addClass("disabled-div");

        }
        else
        {
            $("#divPorAcoes").removeClass("disabled-div");
            $("#divPorMissao").removeClass("disabled-div");
            $("#divPorPrograma").removeClass("disabled-div");
            $("#divPorMod").removeClass("disabled-div");
        }

    });


    /**
     * POR ACOES
     */
    $("#checkporacoes").change(function() {

        if ($('#checkporacoes').is(':checked')) {
            $("#divPorPontos").addClass("disabled-div");
            $("#divPorMissao").addClass("disabled-div");
            $("#divPorPrograma").addClass("disabled-div");
            $("#divPorMod").addClass("disabled-div");

        }
        else
        {
            $("#divPorPontos").removeClass("disabled-div");
            $("#divPorMissao").removeClass("disabled-div");
            $("#divPorPrograma").removeClass("disabled-div");
            $("#divPorMod").removeClass("disabled-div");
        }

    });



    /**
     * POR MISSOES
     */
    $("#checkpormissao").change(function() {

        if ($('#checkpormissao').is(':checked')) {
            $("#divPorPontos").addClass("disabled-div");
            $("#divPorAcoes").addClass("disabled-div");
            $("#divPorPrograma").addClass("disabled-div");
            $("#divPorMod").addClass("disabled-div");

        }
        else
        {
            $("#divPorPontos").removeClass("disabled-div");
            $("#divPorAcoes").removeClass("disabled-div");
            $("#divPorPrograma").removeClass("disabled-div");
            $("#divPorMod").removeClass("disabled-div");
        }
    });

    /**
     * POR PROGRAMA
     */
    $("#checkporprograma").change(function() {

        if ($('#checkporprograma').is(':checked')) {
            $("#divPorPontos").addClass("disabled-div");
            $("#divPorAcoes").addClass("disabled-div");
            $("#divPorMissao").addClass("disabled-div");
            $("#divPorMod").addClass("disabled-div");

        }
        else
        {
            $("#divPorPontos").removeClass("disabled-div");
            $("#divPorAcoes").removeClass("disabled-div");
            $("#divPorMissao").removeClass("disabled-div");
            $("#divPorMod").removeClass("disabled-div");
        }
    });

    /**
     * POR MOD
     */
    $("#chechpormod").change(function() {

        if ($('#chechpormod').is(':checked')) {
            $("#divPorPontos").addClass("disabled-div");
            $("#divPorAcoes").addClass("disabled-div");
            $("#divPorMissao").addClass("disabled-div");
            $("#divPorPrograma").addClass("disabled-div");

        }
        else
        {
            $("#divPorPontos").removeClass("disabled-div");
            $("#divPorAcoes").removeClass("disabled-div");
            $("#divPorMissao").removeClass("disabled-div");
            $("#divPorPrograma").removeClass("disabled-div");
        }
    });

});