
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSystem-personal</title>
</head>
<body>

    <div class="text-center">
       <h1  class="h4 text-gray-900 mb-4">Personal</h1>
    </div>
        <div class="from-group">
			<div class="col-xs-12 col-sm-10 col-md-6">
            <a href="<?= base_url('Personainf') ?>" class="btn btn-primary" >Informacion Personal</a>
        </div>
	</div>
    <br><br>
    <form autocomplete="off" class="form-inline" id="formArchivos" method="POST">
        <div class="container">
        <div class="abs-center">
           <label>Nombre del Documento: </label>
           <div class="input-group">
             <samp class="input-group-addon">
             <i class="fa fa-file" aria-hidden="true"></i>
             </samp>
             <input type="text" name="nombre" placeholder="Nombre del Documento" class="form-control" required="required">
           </div>
           <button class="btn btn-ligth btn-sm" id="upfile">
           <i class="fa fa-upload" id="ico-btn-file" aria-hidden="true"></i>
           </button>

           <input type="file" name="archivo" id="getfile" class="hidden" required="required" accept="application/pdf"/>
           <input type="submit" form="formArchivos" id="smtArchivo" class="btn btn-success btn-sm" value="Agregar">
        </div>
        </div>
      
    </form>
    
    
    <br><br><br>
       <table class="table">
          <thead class="bg-warning">
               <tr>
                  <th class="text-center bg-warning" scope="col">ID</th>
                  <th  class="bd-warning" scope="col">Descripcion del archivo adjunto</th>
                  <th class="text-center bg-warning"  scope="col">Acciones</th>
                  
               </tr>
          </thead>
          <tbody>
          <?php
          $contador = 1;
          foreach($archivos as $archivos){
              ?>
            <tr>
            <td class="text-center"><?php $contador ?></td>
            <td><?php $archivos['nombre'] ?></td>
            <td class="text-center"></td>
            <td>
            <a class="btn btn-primary btn-xs" href="<?= base_url('') ?>" target="_blank">
            <i class="fa fa-eye" aria-hidden="true"></i></a>
            <button class="btn btn-danger btn-xs delArchivo" data-id="0">
            <i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
            </tr>
              <?php
               $contador ++;
          }
          ?>
          
          </tbody>
       </table>
       <script lenguaje="javascript">
        var baseurl = "<?= base_url('') ?>";
    </script>
    <script src="<?= base_url('js/archivos.js') ?>"></script>
</body>
</html>