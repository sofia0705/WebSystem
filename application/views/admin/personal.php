
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
    <form class="form-inline my-2 my-lg-0 col-sm-10">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button  id="btnGetPersonal"class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    
    
    <br><br><br>
       <table class="table">
          <thead class="bg-warning">
               <tr>
                  <th  scope="col">ID</th>
                  <th  scope="col">Nombre</th>
                  <th  scope="col">Correo</th>
                  <th scope="col">Telefono</th>
                  <th ></th>
                  <th></th>
                  
               </tr>
          </thead>
          <tbody>
          
          
          </tbody>
       </table>

       <!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>

       <script lenguaje="javascript">
        var baseurl = "<?= base_url('') ?>";
    </script>
    <script src="<?= base_url('js/archivos.js') ?>"></script>
</body>
</html>