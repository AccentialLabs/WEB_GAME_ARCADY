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

    });

    $("#rodadasdiferentes").change(function() {
        if ($("#rodadasdiferentes").is(':checked')) {
            $("#playlistTableFooter").fadeIn();
        } else {
            $("#playlistTableFooter").fadeOut();
        }
    });

    $(".tipoSelecaoParticipantes").click(function() {

        var valor = $(this).val();

        if (valor === "participantes_manual") {
            $('#showModalJogadores').click();
        } else if (valor === "participantes_equipes_existents") {
            $('#showModalEquipes').click();
        }
    });


    $(".tipoTimes").click(function() {

        var valor = $(this).val();

        // alert(valor);

    });

    $(".temPersonagens").click(function() {

        var valor = $(this).val();

        if (valor === 'sim') {
            $("#showModalPersonagens").click();
        }

    });

    var personsagensContador = 1;
    $("#morePersonagem").click(function() {

        $("#tabelaSelecaoPersonagens").find('tbody')
                .append($('<tr>')
                        .append($('<td>' + personsagensContador + '</td> <td><input type="text" class="form-control" id="data[Personagens][' + personsagensContador + '][nome]" name="data[Personagens][' + personsagensContador + '][nome]" /></td> <td><input type="text" class="form-control" id="data[Personagens][' + personsagensContador + '][quantidade]" name="data[Personagens][' + personsagensContador + '][quantidade]" /></td>')

                                )
                        );

        personsagensContador++;
    });

});