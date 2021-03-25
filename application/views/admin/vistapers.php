<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSysten-Registro</title>
</head>
<body>
    <div class="text-center">
       <h1  class="h4 text-gray-900 mb-4">Registro de Usuarios</h1>
    </div>
    
    <form action="<?= base_url('/Registro/guardar')  ?>" method="POST">
    <table>
    <form>
  <div class="form-row col-sm-10">
       <div class="form-group col-md-6">
         <label for="inputNombre">Nombre </label>
         <input type="text" class="form-control " name="txtnombre" id="inputNombre" placeholder="Nombre">
       </div>
       <div class="form-group col">
         <label for="inputPaterno">Apellido Paterno</label>
         <input type="text" class="form-control"  name="txtappaterno" id="inputPaterno" placeholder="Apellido Paterno">
       </div>
       <div class="form-group col">
         <label for="inputMaterno">Apelllido Materno</label>
         <input type="text" class="form-control" name="txtapmaterno" id="inputMaterno" placeholder="Apellido Materno">
       </div>
    </div>
    <div>
       <div class="form-group col-md-6">
         <label for="inputFecha">Fecha de Nacimiento</label>
         <input type="date" class="form-control" name="datfecnac" id="inputFecha" >
       </div>
       <div class="form-group col-md-6">
          <label >Cuidad</label>
          <select id="cboCuidad" class="form-control">
          <option value="">Elija...</option>
          <option>...</option>
          </select>
    </div>
    </div>
    <div class="form-row col-sm-10">
      <div class="form-group col-md-6">
      <label for="inputCorreo">Correo Electronico</label>
      <input type="email" class="form-control" name="txtcorreo" id="inputCorreo" placeholder="Correo Electronico">
      </div>
  </div>
       <div class="text-center">
         <h1  class="h4 text-gray-900 mb-4"> Usuario</h1>
       </div>
          <div class="form-row col-sm-10">
            <div class="form-group col-md-6">
            <label for="inputUser">Usuario </label>
            <input type="text" class="form-control " name="user" id="inputUser" placeholder="Usuario">
        </div>
       
    </div>
    <div class="form-group col-md-6">
         <label for="inputPassword">Contraseña</label>
         <input type="password" class="form-control" name="txtcontrasena" id="inputPassword" placeholder="Contraseña">
       </div>
  </div>
  <button type="submit" class="btn btn-primary" value="Guardar">Guardar</button>

    </table>
    </form>
</form>
 <a href="<?= base_url('Login') ?>">Loguarse</a>
 <br><br><br>
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
</body>
</html>




