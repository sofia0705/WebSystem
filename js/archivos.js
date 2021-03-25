$(document).ready(function(){
    $("#upfile").on("click",function(){
        $("#getfile").click();
        return false;

    });
    $("#getfile").on("change", function(){
        $("#upfile").removeClass("btn-ligth");
        $("#upfile").addClass(btn-primary);
        $("#ico-btn-file").removeClass("fa-upload");
        $("#ico-btn-file").addClass("fa-check");

        return false;


    });
    $("body").on("submit", "#formArchivos", function(){
        var formData = new formData($("#formArchivos").get(0));
        $("#smtArchivo").prop('disabled', true);
        $.ajax({
            url: base_url= "Personal/addfile",
            type: "POST",
           // dataType: "json",
            data: formData,
            contentType: false,
            processData: false,
            success: function(resultadoItem){
                location.reload();
            }
        });
        return false;

    });
    
});