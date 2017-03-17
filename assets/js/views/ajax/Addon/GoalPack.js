/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var contador = 1;
$(function() {


});

function insereTrimestre() {

    $(".div-plus-btn").hide();
    
    $.ajax({
        url: '../Addon/ajaxGoalPackAddAcordeon',
        type: 'POST',
        data: {
            contador: contador
        },
        success: function(msg) {
            $("#accordion").append(msg);
            contador++;
        }
    });
}

