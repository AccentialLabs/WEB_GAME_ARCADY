/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {

    var index = 1;
    var objsToSave = '';

    var allObjsSelected = false;
    var allEquipesSelected = false;

    $(".selectCheckObj").click(function() {

        var id = $(this).attr('id');

        console.log(objsToSave);

    });

    //ao clicar no check TODOS OS USUÁRIOS CADASTRADOS
    $("#todousuario").change(function() {

        if ($("#todousuario").is(':checked')) {

            $("#divSelecionaUsuario").addClass("disabled-div");
        } else {
            $("#divSelecionaUsuario").removeClass("disabled-div");
        }
    });

    //selecionar todas as de uma só vez
    $("#masterObjCheck").click(function() {

        if (allObjsSelected === false) {
            $(".statusCheckboxObj").attr("checked", "checked");
            allObjsSelected = true;
        } else {
            $(".statusCheckboxObj").removeAttr("checked");
            allObjsSelected = false;
        }
    });


    //selecionar todas as de uma só vez
    $("#masterObjCheckEquipes").click(function() {

        if (allEquipesSelected === false) {
            $(".statusCheckboxEquipes").attr("checked", "checked");
            allEquipesSelected = true;
        } else {
            $(".statusCheckboxEquipes").removeAttr("checked");
            allEquipesSelected = false;
        }
    });

    $("#modspacks").click(function() {

        if ($("#modspacks").is(':checked')) {
            $("#divSelecionaObj").addClass("disabled-div");
            $("#divObjPorCategoria").addClass("disabled-div");
        } else {
            $("#divObjPorCategoria").removeClass("disabled-div");
            $("#divSelecionaObj").removeClass("disabled-div");
        }
    });

    $("#objetocategoria").click(function() {

        if ($("#objetocategoria").is(':checked')) {
            $("#divSelecionaObj").addClass("disabled-div");
            $("#divObjPorMOD").addClass("disabled-div");
        } else {
            $("#divObjPorMOD").removeClass("disabled-div");
            $("#divSelecionaObj").removeClass("disabled-div");
        }

    });

    $("#selecobjetos").click(function() {

        if ($("#selecobjetos").is(':checked')) {
            $("#divObjPorCategoria").addClass("disabled-div");
            $("#divObjPorMOD").addClass("disabled-div");
        } else {
            $("#divObjPorMOD").removeClass("disabled-div");
            $("#divObjPorCategoria").removeClass("disabled-div");
        }

    });

    $("#definirmanualmente").click(function() {

        if ($("#definirmanualmente").is(':checked')) {
            $("#div-para-quem-todos-jogadores").addClass("disabled-div");
            $("#div-para-quem-somente-equipe-tabela").addClass("disabled-div");
            $("#div-para-quem-somente-equipe-titulo").addClass("disabled-div");
        } else {
            $("#div-para-quem-todos-jogadores").removeClass("disabled-div");
            $("#div-para-quem-somente-equipe-tabela").removeClass("disabled-div");
            $("#div-para-quem-somente-equipe-titulo").removeClass("disabled-div");
            //$("#divObjPorCategoria").removeClass("disabled-div");
        }

    });

    $("#somenteequipe").click(function() {
        if ($("#somenteequipe").is(':checked')) {
            $("#div-para-quem-todos-jogadores").addClass("disabled-div");
            $("#div-para-quem-definir-manualmente").addClass("disabled-div");
        } else {
            $("#div-para-quem-todos-jogadores").removeClass("disabled-div");
            $("#div-para-quem-definir-manualmente").removeClass("disabled-div");
        }
    });


});

