/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templatess
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


    $("#labelFucnionarioFoto").click(function() {

        $("#funcionarioFoto").click();



    });

    $("#funcionarioFoto").change(function() {
        readURL(this);
    });

});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#imgFuncionarioFoto").fadeIn(250);
            $('#imgFuncionarioFoto').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}