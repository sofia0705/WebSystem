$(document).on("ready", main);
function main(){
    $("#login").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:$(this).attr("action"),
            type:$(this).attr("method"),
            data:$(this).serialize(),
            success:function(resp){
                if(res==="error"){
                    alert("Los datos no exiten");
                }else{
                    window.location.href ="http://localhost/WebSystem/Login/ingresar";
                }
            }
        });
    });
}
