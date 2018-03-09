$(document).ready(
    function() {

        $('#validate').hide();

        $('#telefone').mask('(00) 0000-0000');
        $('#celular').mask('(00) 0 0000-0000');

        $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);
        });

        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        });

        $('#register-form').submit(function(){

            var nome     = $('#nome').val();
            var telefone = $('#telefone').val();
            var celular  = $('#celular').val();

            if(nome == '') {
                mostrarMenssagemErro('Campo nome não pode ficar em branco');
                return false;
            }else
            if(telefone == '' && celular == '') {
                mostrarMenssagemErro('Preenche o campo telefone ou o campo celular');
                return false;
            }else
                return true;
        });

    }
);

function isEmail(email) {

    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(!regex.test(email)) {
        $('#email').val('');
        $('#validate').html('E-mail no formato incorreto');
        $("#validate").fadeTo(2000, 500).slideUp(500, function(){
            $("#validate").slideUp(500);
        });


    }

}

function mostrarMenssagemErro(msg)
{

    $('#validate').html(msg);
    $("#validate").fadeTo(2000, 500).slideUp(500, function(){
        $("#validate").slideUp(500);
    });


}



