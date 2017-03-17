/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {

    $("#openModalDelete").fadeOut(0);
     var acaoParaExcluir = '';
     var handle = '';

// //MUDANÇA DE STATUS DA TELA CADASTRAR DESAFIO (TABELA 1 E 2)
    $(".statusCheckbox").click(function() {

        
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Programas/mudaStatusProgramas1',
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
    
    //muda status
    $(".statusCheckbox").click(function() {

      
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Programas/mudaStatusProgramas2',
            type: 'POST',
            data: { 
                id: id,
                statusAtual: statusAtual
            },
              sucesso: function(msg) {
                alert(sucesso);
            }
        });
    }); //FIM MUDANÇA DE STATUS DA TELA CADASTRAR DESAFIO (TABELA 1 E 2)

    //muda status
    $(".statusCheckbox").click(function() {

      
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Programas/mudaStatusProgramas',
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

    //exclui programa
    $(".excluirPrograma").click(function() {
        //alert('dad');
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete").click();
    });


    $("#confirmExcluirAcao").click(function () {
        alert('dad');
        $.ajax({
            url: '../Programas/deleteProgramas',
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

