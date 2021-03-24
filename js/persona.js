$.post(baseurl+ "Cuidad/getCuidades",
{
    "sitReg": 1
},
function(date){
    var c = JSON.parse(data);
    $.each(c, function(i,item){
        $('#cboCuidad').append('<option value="'+item.id_cuidad+'">'+item.cuidad+'</option>');

    });

});
$('#cboCuidad').change(function(){
    $('#cboCuidad option:selected').each(function(){
        var id = $('#cboCuidad').val();
        alert(id)
    })

});

$('#btnGetPersonas').click(function(){
    //alert('entro al boton');
    $('#tblPersonas').html(
    '<tr>'+
        '<th style="width: 10px">#</th>'+
        '<th>Nombre</th>'+
        '<th>Apellido Paterno</th>'+
        '<th>Apellido Materno</th>'+
        '<th>Cuidad</th>'+
   '</tr>'

    );
    $.post(baseurl= "Registro/getPersonas",
    function(data){
        //alert(data)
        var p = JSON.parse(data);
        $.each(p, function(i,item){
            $('#tblPersonas').append(
                '<tr>'+
                    '<td>1</td>'+
                    '<td>'+ item.nombre +'</td>'+
                    '<td>'+ item.appaterno +'</td>'+
                    '<td>'+ item.apmaterno +'</td>'+
                    '<td>'+ item.cuidad +'</td>'+
               '</tr>'

            );
        });

    });

});