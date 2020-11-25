$(document).ready(function () {
    $('#emailID').keyup(function () {

        var email = $("#emailID").val();
 
        if (email.match(/^([a-zA-Z0-9_\-\.%]+)@([a-zA-Z0-9_\-\.]+)\.(com|gov|org|net)$/)) {
           $('#pswd_info3').delay(400).fadeOut(800);
     
        }
        else {
            $('#pswd_info3').show().delay(500).fadeOut(5000);
        }

    })
});