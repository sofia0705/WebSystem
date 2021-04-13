$(domcument).on('ready',inicio) 
function inicio ()
{
    $("msg-error").hide();
    mostrarDatos("");
    $('#Buscar').keyup(function(){
        buscar =  $('#Buscar').val();
        mostrarDatos(buscar);
    });
    $("#btnbuscar").click(function(){
        mostrarDatos("");
        $("#Buscar").val("");

    });

    
    $('form').submit(function(e){
        
        e.preventDefault();

        $.ajax({
            url:$("form").attr("action"),
            type:$("form").attr("method"),
            data:$("form").serialize(),
            success:function(respuesta){
                alert(respuesta);
               
            }

        });
    });


}
