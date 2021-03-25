$('#btnGetPersonal').click(function(){
    //alert('entro al boton');
    $('#tblPersonal').html(
    '<tr>'+
        '<th style="width: 10px">#</th>'+
        '<th>ID</th>'+
        '<th>nombre</th>'+
        '<th>Correo</th>'+
        '<th>Telefono</th>'+
        '<th>Archivo</th>'+
   '</tr>'

    );
    $.post(baseurl= "Personal/getPersonal",
    function(data){
        //alert(data)
        var p = JSON.parse(data);
        $.each(p, function(i,item){
            $('#tblPersonal').append(
                '<tr>'+
                    '<td>'+item.id+'</td>'+
                    '<td>'+ item.nombre +'</td>'+
                    '<td>'+ item.correo +'</td>'+
                    '<td>'+ item.telefono +'</td>'+
                    '<td>'+ item.archivo +'</td>'+
               '</tr>'

            );
        });

    });

});