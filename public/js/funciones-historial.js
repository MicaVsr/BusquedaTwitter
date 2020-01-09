$(document).ready(function(){
    $("#historial").ready(function(){
        $.ajax({
            data:  {},
            url:   'controller/historial.php',
            type:  'POST',
            beforeSend: function (){
                $("#historial").html('<div class="spinner-border text-secondary"></div>');
            },
            success: function (response){
                $("#historial").html(response);
            },
            error:function(){
                $("#historial").html('<p>Ha ocurrido un error, inténtelo nuevamente</p>');
            }
        });
    });
});