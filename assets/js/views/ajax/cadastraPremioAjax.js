$(function() {

    /**
     * QUANTIDADE
     */
    $("#premioIlimitado").change(function() {
        $("#quantidadeatualpremios").val(0);
        $("#quantidadepremios").val(0);
        $("#quantidadeatualpremios").attr("disabled", "disabled");
        $("#quantidadepremios").attr("disabled", "disabled");
        $("#premioControlado").removeAttr("checked");
    });

    $("#premioControlado").change(function() {
        $("#quantidadeatualpremios").val('');
        $("#quantidadepremios").val('');
        $("#quantidadeatualpremios").attr("disabled", false);
        $("#quantidadepremios").attr("disabled", false);
        $("#premioIlimitado").removeAttr("checked");
    });


    /**
     * DISPONIBILIDADE
     */

    $("#disponibilizadoPorConquista").change(function() {
        $("#quantidadedisponibilizadade").val(0);
        $("#quantidadedisponibilizadade").attr("disabled", "disabled");
        $("#disponibilizadoCatalogo").removeAttr("checked");
    });

    $("#disponibilizadoCatalogo").change(function() {
        $("#quantidadedisponibilizadade").val('');
        $("#quantidadedisponibilizadade").attr("disabled", false);
        $("#disponibilizadoPorConquista").removeAttr("checked");
    });

});