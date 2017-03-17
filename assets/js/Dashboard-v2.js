/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {

    /**
     * PAUSE
     */
    $(".pause").click(function() {
        $("#loader").fadeIn(200);
        var id = $(this).attr("value");

        var element0 = $(this);

        $.ajax({
            url: '../Jogo/pauseJogo',
            type: 'POST',
            data: {
                id: id
            },
            success: function(retorno) {
                console.log(retorno);
                $("#loader").fadeOut(200);
                if (retorno === 'sucesso') {

                    $(element0).removeClass("glyphicon-pause");
                    $(element0).removeClass("pause");

                    $(element0).addClass("glyphicon-play");
                    $(element0).addClass("play");

                    $("#content-jogo-" + id).css('background-color', 'lightgrey');
                    $("#content-jogo-" + id).css('opacity', '0.6');
                } else {
                    //erro
                }
            }
        });
    });

    /**
     * STOP
     */
    $(".stop").click(function() {
        $("#loader").fadeIn(200);
        var id = $(this).attr("value");

        $.ajax({
            url: '../Jogo/pauseJogo',
            type: 'POST',
            data: {
                id: id
            },
            success: function(retorno) {
                console.log(retorno);
                $("#loader").fadeOut(200);
                if (retorno === 'sucesso') {

                    $("#content-jogo-" + id).css('background-color', 'lightgrey');
                    $("#content-jogo-" + id).css('opacity', '0.6');
                } else {
                    //erro
                }
            }
        });
    });

    /**
     * CONFIG
     */
    $(".config").click(function() {
        $("#loader").fadeIn(200);
        var id = $(this).attr("value");

        $.ajax({
            url: '../Jogo/configuraJogo',
            type: 'POST',
            data: {
                id: id
            },
            success: function(retorno) {
                console.log(retorno);
                alert(retorno);
                // window.location.href = '../jogo/cadastro';
            }
        });
    });

    $(".play").click(function() {
        $("#loader").fadeIn(200);
        var id = $(this).attr("value");

        var element0 = $(this);
        $.ajax({
            url: '../Jogo/configuraJogo',
            type: 'POST',
            data: {
                id: id
            },
            success: function(retorno) {
                console.log(retorno);
                alert(retorno);
            }
        });
    });
});


;