$(document ).ready(function() {

    $('.menu .item').tab()
    }
                   
                   
);

function modal(){
    $('.ui.modal')
        .modal({
            blurring: true
        })
        .modal('show');               
}

function changePasswordModal(){
    $('#change-password')
        .modal({
            blurring: true
        })
        .modal('show');               
}

function forgotPasswordModal(){
    $('#forgot-password')
        .modal({
            blurring: true
        })
        .modal('show');               
}