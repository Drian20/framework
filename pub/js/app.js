//
//functions
//

function loading_trans() {
    return;
}

$(document).ready(function () {

    $('.form-log').on('submit', function (e) {
        e.preventDefault();

        console.log('click');
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            data: postData,
            method: 'post',
            dataType: 'json',
            beforeSend: function () {
                //loading_trans();
            },
            error: function () {
                show_mesg('Error al iniciar sesion');
            },
            success: function (resp) {
                console.log(resp);
                window.location.href = resp.redirect;
            }
        });
        return false;
    });

    $('.form-reg').on('submit', function () {
        console.log('click');
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            data: postData,
            method: 'post',
            dataType: 'json',
            beforeSend: function () {
                //loading_trans();
            },
            error: function () {
                show_mesg('Error de registro');
            },
            success: function (resp) {
                console.log(resp);
                window.location.href = resp.redirect;
            }
        });
        return false;
    });

    $('.form-out').on('submit', function () {
        console.log('click');
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            data: postData,
            method: 'post',
            dataType: 'json',
            beforeSend: function () {
                //loading_trans();
            },
            error: function () {
                show_mesg('Error al salir');
            },
            success: function (resp) {
                console.log(resp);
                window.location.href = resp.redirect;
            }
        });
        return false;
    });
});