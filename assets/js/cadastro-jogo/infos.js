/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {

    $("#btnCadastrarPremio").click(function() {

        $('#premio-modal').modal('show');

    });

    /**
     * Quando clicado em botão proximo na tela de infos
     */
    $("#infos-proximo-passo").click(function() {

        $("#loader").fadeIn(200);

        var nome = $("#nome").val();
        var usuario_responsavel_nome = $("#usuario_responsavel_nome").val();
        var orientacoes = $("#orientacoes").val();
        var regras = $("#regras").val();

        $("#nomeJogo_H3").html(nome);

        $(".error-insert-game").fadeOut(200);
        $.ajax({
            url: '../Jogo/cadastroSIMPLESNovoJogo',
            type: 'POST',
            data: {
                nome: nome,
                usuario_responsavel_nome: usuario_responsavel_nome,
                orientacoes: orientacoes,
                regras: regras
            },
            success: function(retorno) {
                console.log(retorno);
                $("#loader").fadeOut(200);
                if (retorno !== 0) {

                    //caso SUCESSO
                    //iremos para seleção de jogadores que irão participar do jogo
                    $(".tab-pane").removeClass("active");
                    $("#jogadores").addClass("active");
                } else {
                    //erro
                    $(".error-insert-game").fadeIn(200);
                }
            }
        });

    });

    /**
     * Quando clicado em botão proximo na tela de jogadoress 
     */
    $("#jogadores-proximo-passo").click(function() {
        $("#loader").fadeIn(200);

        var checkedValues = $('.jogadores-selecionados:checked').map(function() {
            return this.value;
        }).get();

        console.log(checkedValues);

        var jsonArray = JSON.stringify(checkedValues);

        $.ajax({
            url: '../Jogo/cadastroJogadoresJogo',
            type: 'POST',
            data: {
                arrayJogadores: jsonArray
            },
            success: function(retorno) {
                $("#loader").fadeOut(200);
                //alert(retorno);
                if (retorno !== 0) {

                    //caso SUCESSO
                    //iremos para seleção de jogadores que irão participar do jogo
                    $(".tab-pane").removeClass("active");
                    $("#interacoes").addClass("active");
                } else {
                    //erro
                }
            }
        });

    });

    /**
     * Quando form CADASTRO DE DESAFIO for clicado
     */
    $('#form-cadastra-desafio').on('submit', function(e) {
        $("#loader").fadeIn(200);
        e.preventDefault();

        /**
         * Capturamos a data INICIAL setada e verificamos se é menor que a existente
         * @type @call;$@call;val
         */
        var valorDataInicio = $("#form-cadastra-desafio input#datainicio").val();
        var dataAtual_INICIO = $("#span_DataInicial").text();
        var dataAtual = $.datepicker.formatDate('dd M yy', new Date(valorDataInicio));
        $("#span_DataInicial").html(dataAtual);

        /**
         * Capturamos a data FINAL setada e verificamos se é menor que a existente
         * @type @call;$@call;val
         */
        var valorDataTermino = $("#form-cadastra-desafio input#datatermino").val();
        var dataAtual_TERMINO = $("#span_DataFinal").text();
        var dataAtual_FIM = $.datepicker.formatDate('dd M yy', new Date(valorDataTermino));
        $("#span_DataFinal").html(dataAtual_FIM);

        //CAPTURANDO PONTOS
        var pontos = parseInt($("#form-cadastra-desafio input#ganha").val());
        var pontosAtual = parseInt($("#span_Pontos").text());
        var pontosSoma = pontos + pontosAtual;
        $("#span_Pontos").html(pontosSoma);


        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
                $("#loader").fadeOut(200);
                $("#form-cadastra-desafio").trigger('reset');

                $('#desafio-modal').modal('hide');

            },
            error: function(jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });

    });

    /**
     * Quando form CADASTRO DE DESAFIO for clicado
     */
    $('#form-cadastra-missao').on('submit', function(e) {
        $("#loader").fadeIn(200);
        e.preventDefault();

        /**
         * Capturamos a data INICIAL setada e verificamos se é menor que a existente
         * @type @call;$@call;val
         */
        var valorDataInicio = $("#form-cadastra-missao input#datainicio").val();
        var dataAtual_INICIO = $("#span_DataInicial").text();

        /**
         * Verificamos se a data setada na Missao é menor que a data já setada no span do jogo
         */
        if ((new Date(valorDataInicio).getTime() < new Date(dataAtual_INICIO).getTime())) {
            var dataAtual = $.datepicker.formatDate('dd M yy', new Date(valorDataInicio));
            $("#span_DataInicial").html(dataAtual);
        }


        /**
         * Capturamos a data FINAL setada e verificamos se é menor que a existente
         * @type @call;$@call;val
         */
        var valorDataTermino = $("#form-cadastra-missao input#datatermino").val();
        var dataAtual_TERMINO = $("#span_DataFinal").text();

        if ((new Date(valorDataTermino).getTime() > new Date(dataAtual_TERMINO).getTime())) {
            var dataAtual_FIM = $.datepicker.formatDate('dd M yy', new Date(valorDataTermino));
            $("#span_DataFinal").html(dataAtual_FIM);
        }

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
                $("#loader").fadeOut(200);
                $("#form-cadastra-missao").trigger('reset');

                $('#missao-modal').modal('hide');

            },
            error: function(jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });

    /**
     * Quando form CADASTRO DE DESAFIO for clicado
     */
    $('#form-cadastra-acao').on('submit', function(e) {
        $("#loader").fadeIn(200);
        e.preventDefault();

        /**
         * Capturamos a data INICIAL setada e verificamos se é menor que a existente
         * @type @call;$@call;val
         */
        var valorDataInicio = $("#form-cadastra-acao input#datainicio").val();
        var dataAtual_INICIO = $("#span_DataInicial").text();

        /**
         * Verificamos se a data setada na Missao é menor que a data já setada no span do jogo
         */
        if ((new Date(valorDataInicio).getTime() < new Date(dataAtual_INICIO).getTime())) {
            var dataAtual = $.datepicker.formatDate('dd M yy', new Date(valorDataInicio));
            $("#span_DataInicial").html(dataAtual);
        }

        /**
         * Capturamos a data FINAL setada e verificamos se é menor que a existente
         * @type @call;$@call;val
         */
        var valorDataTermino = $("#form-cadastra-acao input#datatermino").val();
        var dataAtual_TERMINO = $("#span_DataFinal").text();

        if ((new Date(valorDataTermino).getTime() > new Date(dataAtual_TERMINO).getTime())) {
            var dataAtual_FIM = $.datepicker.formatDate('dd M yy', new Date(valorDataTermino));
            $("#span_DataFinal").html(dataAtual_FIM);
        }

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
                $("#loader").fadeOut(200);
                $("form-cadastra-acao").trigger('reset');

                $('#acao-modal').modal('hide');
            },
            error: function(jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });

    /**
     * Quando form CADASTRO DE DESAFIO for clicado
     */
    $('#form-cadastra-programa').on('submit', function(e) {
        $("#loader").fadeIn(200);
        e.preventDefault();

        /**
         * Capturamos a data INICIAL setada e verificamos se é menor que a existente
         * @type @call;$@call;val
         */
        var valorDataInicio = $("#form-cadastra-programa input#datainicio").val();
        var dataAtual_INICIO = $("#span_DataInicial").text();

        /**
         * Verificamos se a data setada na Missao é menor que a data já setada no span do jogo
         */
        if ((new Date(valorDataInicio).getTime() < new Date(dataAtual_INICIO).getTime())) {
            var dataAtual = $.datepicker.formatDate('dd M yy', new Date(valorDataInicio));
            $("#span_DataInicial").html(dataAtual);
        }

        /**
         * Capturamos a data FINAL setada e verificamos se é menor que a existente
         * @type @call;$@call;val
         */
        var valorDataTermino = $("#form-cadastra-programa input#datatermino").val();
        var dataAtual_TERMINO = $("#span_DataFinal").text();

        if ((new Date(valorDataTermino).getTime() > new Date(dataAtual_TERMINO).getTime())) {
            var dataAtual_FIM = $.datepicker.formatDate('dd M yy', new Date(valorDataTermino));
            $("#span_DataFinal").html(dataAtual_FIM);
        }

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
                $("#loader").fadeOut(200);
                $("form-cadastra-programa").trigger('reset');

                $('#programa-modal').modal('hide');
            },
            error: function(jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });


    $("#form-cadastra-premio").on('submit', function(e) {
        $("#loader").fadeIn(200);
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            success: function(retorno) {

                $("#loader").fadeOut(200);
                $("form-cadastra-premio").trigger('reset');

                // $('#premio-modal').modal('hide');
                $("#fecha-modal-premio").click();
                $(".modal-backdrop").fadeOut(200);

                var name = $(".premio-input-nome").val();
                var tipo = $(".premio-input-tipo").val();
                var descricao = $(".premio-input-descricao").val();

                // buscando tabela
                var table = document.getElementById("tabelaPREMIOS");

                var rowCount = table.rows.length;
                //criando nova linha
                var row = table.insertRow(rowCount);

                //adicionando celular a tabela
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);

                //adicionando os valores às celulas
                cell1.innerHTML = name;
                cell2.innerHTML = tipo;
                cell3.innerHTML = "<small>" + descricao + "</small>";
                cell4.innerHTML = "<span class='glyphicon glyphicon-pause'  id=" + retorno + " onclick='pausePremio(" + retorno + ", this)'></span>";
            },
            error: function(jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });

    /**
     * Ação para quando se fechar os modals dentro do cadastro de programa
     */
    $("#myModalJogadores").on('hidden.bs.modal', function() {

        setTimeout(
                function() {
                    $("#btnAbreModal_PROGRAMA").click();
                }, 400);

        setTimeout(
                function()
                {
                    $(".modal-backdrop").removeClass("in");
                    $(".modal-backdrop").addClass("out");
                    //do something special
                }, 2000);
    });

    /**
     * Ação para quando se fechar os modals dentro do cadastro de programa
     */
    $("#myModalEquipes").on('hidden.bs.modal', function() {
        setTimeout(
                function() {
                    $("#btnAbreModal_PROGRAMA").click();
                }, 400);

        setTimeout(
                function()
                {
                    $(".modal-backdrop").removeClass("in");
                    $(".modal-backdrop").addClass("out");
                    //do something special
                }, 2000);
    });

    /**
     * Ação para quando se fechar os modals dentro do cadastro de programa
     */
    $("#myModalPersonagens").on('hidden.bs.modal', function() {
        setTimeout(
                function() {
                    $("#btnAbreModal_PROGRAMA").click();
                }, 400);

        setTimeout(
                function()
                {
                    $(".modal-backdrop").removeClass("in");
                    $(".modal-backdrop").addClass("out");
                    //do something special
                }, 2000);
    });


    $(".menu-tab-premios").click(function() {

        $.ajax({
            url: '../Jogo/carregaPremiosDinamicamente',
            type: 'POST',
            data: {},
            success: function(retorno) {
                console.log(retorno);
                // alert(retorno);
            }
        });

    });



    /**
     * Função insere dinamicamente uma linha à tabela de Prêmios
     
     $("#tabelaPREMIOS").click(function() {
     
     var name = $(".premio-input-nome").val();
     var tipo = $(".premio-input-tipo").val();
     var descricao = $(".premio-input-descricao").val();
     
     // buscando tabela
     var table = document.getElementById("tabelaPREMIOS");
     
     var rowCount = table.rows.length;
     //criando nova linha
     var row = table.insertRow(rowCount);
     
     //adicionando celular a tabela
     var cell1 = row.insertCell(0);
     var cell2 = row.insertCell(1);
     var cell3 = row.insertCell(2);
     
     //adicionando os valores às celulas
     cell1.innerHTML = name;
     cell2.innerHTML = tipo;
     cell3.innerHTML = descricao;
     
     }); */

    $(".play-premio").click(function() {
        $("#loader").fadeIn(200);

        var id = $(this).attr('id');
        var element = $(this);
        $.ajax({
            url: '../Jogo/playPremio',
            type: 'POST',
            data: {id: id},
            success: function(retorno) {
                console.log(retorno);
                // alert(retorno);

                $(element).removeClass("glyphicon-play");
                $(element).removeClass("play-premio");

                $(element).addClass("glyphicon-pause");
                $(element).addClass("pause-premio");

                $("#loader").fadeOut(200);
            }
        });
    });

    $(".pause-premio").click(function() {
        $("#loader").fadeIn(200);

        var id = $(this).attr('id');
        var element = $(this);
        $.ajax({
            url: '../Jogo/pausePremio',
            type: 'POST',
            data: {id: id},
            success: function(retorno) {
                console.log(retorno);

                $(element).removeClass("glyphicon-pause");
                $(element).removeClass("pause-premio");

                $(element).addClass("glyphicon-play");
                $(element).addClass("play-premio");

                $("#loader").fadeOut(200);
                //alert(retorno);
            }
        });
    });


    $(".trash-premio").click(function() {

        $("#loader").fadeIn(200);
        var id = $(this).attr('id');
        var element = $(this);

        $.ajax({
            url: '../Jogo/trashPremio',
            type: 'POST',
            data: {id: id},
            success: function(retorno) {
                console.log(retorno);

                var tr = $(element).closest('tr');
                tr.css("opacity", "0.5");
                tr.fadeOut(400, function() {
                    tr.remove();
                });

                $("#loader").fadeOut(200);
            }
        });

    });


    $(".busca-premios").click(function() {

        $("#loader").fadeIn(200);

        $.ajax({
            url: '../Jogo/buscaPremiosCadastrados_PORJOGO',
            type: 'POST',
            data: {},
            success: function(retorno) {
                console.log(retorno);
                //alert(retorno);
                $("#recebe-table-premios").html(retorno);
                $("#loader").fadeOut(200);

                $("#lista-premios-modal").modal('show');

            }
        });

    });


});

function pausePremio(id, element) {
    $("#loader").fadeIn(200);

    $.ajax({
        url: '../Jogo/pausePremio',
        type: 'POST',
        data: {id: id},
        success: function(retorno) {

            console.log(retorno);

            $(element).removeClass("glyphicon-pause");

            $(element).addClass("glyphicon-play");
            $(element).addClass("play-premio");

            $("#loader").fadeOut(200);
            //alert(retorno);
        }
    });
}

