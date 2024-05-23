<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <form action="entra.php" method="post">
        <table cellspacing = 25 border=1>
            <tr>
                <th>INSERTE LOS DATOS</th>
            </tr>
            <tr>
                <td>USUARIO: </td>
            </tr>
            <tr>
                <td><input type="text" name="txtUser" class="cajatexto"></td>
            </tr>
            <tr>
                <td>CONTRASEÑA: </td>
            </tr>
            <tr>
                <td><input type="text" name="txtPass" class="cajatexto"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar" class="boton"></td>
            </tr>
            <tr>
                <td><a href="../index.html">Volver</a></td>
            </tr>
        </table>
    </form>
</body>
</html>