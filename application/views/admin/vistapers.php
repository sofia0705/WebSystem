<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSysten-Registro</title>
</head>
<body>
    <h1>Registro de Usuarios</h1>
    <form action="<?= base_url('index.php/Registro/guardar')  ?>" method="POST">
        <table>
            <tr>
                <td><label>Nombre: </label></td>
                <td><input type="text" name="txtnombre"></td>
            </tr>
            <tr>
                <td><label>Apellido Paterno: </label></td>
                <td><input type="text" name="txtappaterno"></td>
            </tr>
            <tr>
                <td><label>Apellido Materno: </label></td>
                <td><input type="text" name="txtapmaterno"></td>
            </tr>
            <tr>
                <td><label>Fecha de Nacimiento: </label></td>
                <td><input type="date" name="datfecnac"></td>
            </tr>
            <tr>
                <td><label>Email: </label></td>
                <td><input type="email" name="txtcorreo"></td>
            </tr>
            <tr>
                <td colspan="2"><label>Usuario</label></td>
            </tr>
            <tr>
                <td><label>Usuario: </label></td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td><label>Contraseña: </label></td>
                <td><input type="password" name="txtcontrasena"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Guardar"></td>
            </tr>
        </table>
    </form>
    <a href="<?= base_url('index.php/Login') ?>">Loguarse</a>
</body>
</html>