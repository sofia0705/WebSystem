<body>
		<div class="container">
           <div class="text-center">
               <h1  class="h4 text-gray-900 mb-4"> Informacion Personal</h1>
           </div>
			
			<form class="form-horizontal" role="form"  action="<?= base_url('Personainf/Info') ?>" method="POST"  autocomplete="off">
			<form class="needs-validation" novalidate>
				<div class="form-group">
					<label for="validationDefault01" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="txtnombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="validationDefault02" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="txtemail" placeholder="Email" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="validationDefault03" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="txttelefono" placeholder="Telefono">
					</div>
				</div>
				
				<div class="form-group">
					<label for="validationDefault04" class="col-sm-2 control-label">Estado Civil</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado_civil" name="txtestado_civil">
							<option value="SOLTERO">SOLTERO</option>
							<option value="CASADO">CASADO</option>
							<option value="OTRO">OTRO</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="validationDefault05" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="txthijos" value="1" checked> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="txthijos" value="0"> NO
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="validationDefault07" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="txtintereses" value="Libros"> Libros
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="txtintereses" value="Musica"> Musica
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="txtintereses" value="Deportes"> Deportes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="txtintereses" value="Otros"> Otros
						</label>
					</div>
				</div>
				<?php $error; ?>
				
				<div class="form-group">
				
				   <div class="col-sm-10">
                   <td><label for="archivo" name="titImagen">Archivo</label></td>
                   <input type="file"  href="<?= base_url('Personainf/subirArchivo') ?>" enctype="multipart/form-data"  name="fileImagen" class="form-control-file" id="archivo">
				   </div>
				
                </div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6">
					
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			
			</form>
			<?php $errorArch; ?>
            <?php $estado; ?>
			<script src="<?= base_url('js/archivos.js') ?>"></script>

			<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
		</div>
	</body>