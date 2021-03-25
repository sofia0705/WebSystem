<h3 class="h4 text-gray-900 mb-4">Subir Imagen</h3>
<form action="<?= base_url('Upload/subirImagen') ?>" method="POST" enctype="multipart/form-data">
<table>
    <tr>
        <td>Titulo de la imgen: </td>
        <td><input type="text" name="titImagen" class="form-control"></td>
    </tr>
    <tr>
        <td>Imagen</td>
        <td><input type="file" name="fileImagen" class="form-control"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" class="btn btn-success" value="Guardar"></td>
    </tr>
</table>
</form>

<?php $error; ?>
<br><br>
<h1 class="h4 text-gray-900 mb-4">Subir Archivos</h1>
<form action="<?= base_url('Upload/subirArchivo') ?>" method="POST" enctype="multipart/form-data">
<table>
    <tr>
        <td>Titulo del Documento</td>
        <td><input type="text" name="titImagen" class="form-control"></td>
    </tr>
    <tr>
        <td> Documento</td>
        <td><input type="file" name="fileImagen" class="form-control"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" class="btn btn-primary" value="Guardar"></td>
    </tr>
</table>

</form>
<?php $errorArch; ?>
<?php $estado; ?>
<a href="<?= base_url('Upload/dowloads/') ?> <?php $archivo; ?>">Descargar</a>