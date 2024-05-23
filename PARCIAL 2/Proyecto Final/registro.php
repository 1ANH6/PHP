<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylereg2.css">
</head>
<body>
    <header>
        <nav>
            <h1><a href="index.html" id="inicio">INICIO</a></h1>
        </nav>
    </header>
    <div class="container">
        <br>
        <h1>REGISTRO</h1>
        <br>
        <form action="registro.php" method="post">
            <table class="datos">
                <tr>
                    <td><input type="text" name="txtNombre" placeholder="Nombre" autofocus class="txtbox"></td>
                </tr> 
                <tr>
                    <td><input type="text" name="txtUsuario" placeholder="Usuario" autofocus class="txtbox"></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtCorreo" placeholder="Correo" autofocus class="txtbox"></td>
                </tr>
                <tr>
                    <td><input type="password" name="txtContra" placeholder="Contraseña" autofocus class="txtbox"></td>
                </tr>
                <tr>
                    <td class="rf"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Enviar" class="btn-enviar"></td>
                </tr>
            </table>
        </form>
        <?php
            if($_POST)
            {
                $nombre = $_POST["txtNombre"];
                $usuario = $_POST["txtUsuario"];
                $correo = $_POST["txtCorreo"];
                $contra = $_POST["txtContra"];
                $conexion = mysqli_connect('localhost', 'root', '', 'Escuela', '3306');
                $consul = "SELECT * FROM Usuarios WHERE usuario = '$usuario'";
                $resul = mysqli_query($conexion, $consul);
                $mostrar = mysqli_fetch_array($resul);
                if($mostrar)
                {
                    ?>
                    <h4 class="error"> EL USUARIO YA EXISTE </h4>
                    <?php
                }
                else
                {
                    $consulta = "INSERT INTO Usuarios (nombre, usuario, correo, contrasenia) VALUES ('$nombre', '$usuario', '$correo', sha1('$contra'))";
                    $resultado = mysqli_query($conexion, $consulta);
                    ?>
                    <h4 class="correc"> REGISTRO COMPLETADO </h4>
                    <?php
                }
                mysqli_close($conexion);
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>