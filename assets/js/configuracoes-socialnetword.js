/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {

    $("#saveSocialBtn").click(function() {

        var facebook = $("#facebookProfile").val();
        var twt = $("#twitterProfile").val();
        var insta = $("#instaProfile").val();

        var isFACEBOOK = false;
        var isTWITTER = false;
        var isINSTA = false;

        if (facebook.length !== 0) {
            isFACEBOOK = "FACEBOOK";
        }

        if (twt.length !== 0) {
            isTWITTER = "TWITTER";
        }

        if (insta !== 0) {
            isINSTA = "INSTAGRAM";
        }

        alert(facebook + " - " + twt + " - " + insta);

        $.ajax({
            url: '../configuracoes/salvarRedeSocial',
            type: 'POST',
            data: {
                isFACEBOOK: isFACEBOOK,
                isTWITTER: isTWITTER,
                isINSTA: isINSTA,
                facebookProfile: facebook,
                twitterProfile: twt,
                instaProfile: insta
            },
            success: function(msg) {
                alert(msg);
                console.log(msg);
            }
        });

    });

});


