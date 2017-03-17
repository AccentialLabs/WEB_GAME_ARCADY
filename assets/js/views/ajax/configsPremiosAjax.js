/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {

    var contador = 0;

    var hash = window.location.hash;
    //alert("essa estava aberta: " + hash);

    $("#btnSalvarTiposPremio").click(function() {

        var addDescricao = $("#addNome" + contador).val();

        addTipoPremio(addDescricao);
        location.reload();

    });

    $(".tabA").click(function() {

        var href = $(this).attr("href");
        window.location.hash = href;
    });

    $("#openModalDelete4").fadeOut(0);
    var acaoParaExcluir = '';
    var handle = '';

    //muda status
    $(".statusCheckbox").click(function() {

        // alert(id);
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Configuracoes/mudaStatusPremios',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            sucesso: function(msg) {
                alert(sucesso);

            }
        });

    });

    //exclui usuario
    $(".excluirPremio4").click(function() {
        //alert('dad');
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete4").click();

    });

    $("#confirmExcluirAcao4").click(function() { //quando muda o "ExcluirAcao"ele não exclui.

        $.ajax({
            url: '../Configuracoes/deleteTipoPremio',
            type: 'POST',
            data: {
                id: acaoParaExcluir
            },
            success: function(msg) {

                var tr = $(handle).closest('tr');
                tr.fadeOut(600, function() {
                    tr.remove();
                });

                $('#myModalDeleteAcao4').modal('toggle');
                $('#myModalDeleteAcao4').modal('hide');


            }
        });

    });

    AddTableRow3 = function() {

        $("#btnSalvarTiposPremio").fadeIn(100);
        var newRow = $("<tr class='listas'>");
        var cols = "";

        if (contador == 0) {

            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" class="form-control" placeholder="Descrição" id="addNome' + contador + '"</td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman3").append(newRow);
            return false;
        } else {

            var addDescricao = $("#addNome" + contador).val();

            addTipoPremio(addDescricao);

            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" class="form-control" placeholder="Descrição" id="addNome' + contador + '"</td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman3").append(newRow);
            return false;

        }
    };


});

function addTipoPremio(descricao) {

    $.ajax({
        url: '../Configuracoes/insertTipoPremio',
        type: 'POST',
        data: {
            descricao: descricao,
            status: 1
        },
        success: function(msg) {

        }
    });

}

