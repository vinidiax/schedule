$(document).ready(
    function() {
        $('#telefone').mask('(00) 0000-0000');
        $('#celular').mask('(00) 0 0000-0000');

        $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);
        });

        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        });

    }
);

function isEmail(email) {

    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(!regex.test(email)) {
        $('#email').val('');
        alert('Formato incorreto do e-mail');

    }

}



