$(document).ready(function(){
    /*$("#siguiente").click(function(){
        var query=$("#query").val();
        alert(query);
        $.ajax({
            data:  {query:query},
            url:   'controller/buscar.php',
            type:  'GET',
            beforeSend: function (){
                $("#resultado_busqueda").html('<div class="spinner-border text-secondary"></div>');
            },
            success: function (response){
                alert(query);
                $("#resultado_busqueda").html(response);
            },
            error:function(){
                $("#resultado_busqueda").html('<p>Hubo un error en la búsqueda, inténtelo nuevamente</p>');
            }
        });
    });*/

    $("#buscar").click(function(){
        var palabra=$("#palabra").val();

        if (palabra!=''){
            $.ajax({
                data:  {palabra:palabra},
                url:   'controller/buscar.php',
                type:  'GET',
                beforeSend: function (){
                    $("#resultado_busqueda").html('<div class="spinner-border text-secondary"></div>');
                },
                success: function (response){
                    $("#resultado_busqueda").html(response);
                },
                error:function(){
                    $("#resultado_busqueda").html('<p>Hubo un error en la búsqueda, inténtelo nuevamente</p>');
                }
            });
        }else{
            $("#resultado_busqueda").html('<p>Ingrese una palabra para realizar una busqueda</p>');
        }
    });

    $("#buscar").click(function(){
        var palabra=$("#palabra").val();

        if (palabra!=''){
            $.ajax({
                data:  {palabra:palabra},
                url:   'model/guardar_en_historial.php',
                type:  'POST',
                error:function(){
                    $("#resultado_busqueda").html('<p>Ha ocurrido un error, intentelo nuevamente</p>');
                }
            });
        }else{
            $("#resultado_busqueda").html('<p>Por favor, ingrese una palabra</p>');
        }
    });
});