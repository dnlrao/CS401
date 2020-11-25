$(document).ready(function () {

    $('#psw').keyup(function () {
        var cond = false;
        // keyup code here 
        var pswd = $(this).val();
        if (pswd.length < 8) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }
        //validate letter
        if (pswd.match(/[a-z]*/)) {
            $('#letter').removeClass('invalid').addClass('valid');
        } else {
            $('#letter').removeClass('valid').addClass('invalid');
        }

        //validate capital letter
        if (pswd.match(/[A-Z]/)) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $('#capital').removeClass('valid').addClass('invalid');
        }

        //validate number
        if (pswd.match(/\d/)) {
            $('#number').removeClass('invalid').addClass('valid');

        } else {
            $('#number').removeClass('valid').addClass('invalid');
        }

    }).hover(function () {
        // over
        $('#pswd_info').show()

    }, function () {
        // out
        $('#pswd_info').fadeOut('slow');
    }
    );

    $('#psw-repeat').keyup(function () {

        var password = $("#psw").val();
        var repeatPassword = $("#psw-repeat").val();

        if (password != repeatPassword) {
            $('#pswd_info2').show()
        }
        else {
            $('#pswd_info2').delay(400).fadeOut(800);
        }

    }

    ).focusout(function () {
        $('#pswd_info2').delay(400).fadeOut(800);

    });

    $('#email').keyup(function () {

        var email = $("#email").val();
 
        if (email.match(/^([a-zA-Z0-9_\-\.%]+)@([a-zA-Z0-9_\-\.]+)\.(com|gov|org|net)$/)) {
           $('#pswd_info3').delay(400).fadeOut(800);
     
        }
        else {
            $('#pswd_info3').show()
        }

    }

    ).focusout(function () {
        $('#pswd_info3').delay(400).fadeOut(800);

    });

});

