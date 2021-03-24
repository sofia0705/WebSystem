<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSystem- Tabla Registros</title>
</head>
<body>
    <div class="text-center">
       <h1  class="h4 text-gray-900 mb-4">Tabla Registros</h1>
    </div>
    <form action="<?= base_url('Cuidad')  ?>" method="POST">
    <button type="button" id="btnGetPersonas"  class="btn btn-flat"><i class="fa fa-search"> Buscar </i>
    </button>
    
      <div class="card-body">
        <div class="box box-primary">
        <table class="table table-bordered" id="tblPersonas" width="100%" cellspacing="0">
   <tr>
        <th style="width: 10px">#</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Cuidad</th>
   </tr>  

      </table>
      
    </div>


 <script type="text/javascript">
 var baseurl = "<?= base_url('') ?>";
 </script>
    </form>
</body>
</html>