/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
     $(".statusCheckbox").click(function() {
       // alert(id);
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Configuracoes/mudaStatusUsuarioGestores',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
              success: function(msg) {
              //  alert(msg);
            }
        });

    });
    
});
    