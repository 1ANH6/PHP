<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <header>
        <nav>
            <h1><a href="index.html" id="inicio">INICIO</a></h1>
        </nav>
    </header>
    <div class="container">
        <br>
        <h1>¡BIENVENIDO!</h1>
        <br>
        <br>
        <form action="login.php" method="post">
            <table class="datos">
                <tr>
                    <td><input type="text" name="txtUsuario" placeholder="Usuario" autofocus class="txtbox"></td>
                </tr> 
                <tr>
                    <td><input type="password" name="txtContra" placeholder="Contraseña" autofocus class="txtbox"></td>
                </tr>
                <tr>
                    <td class="rf"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="login" class="btn-enviar"></td>
                </tr>
            </table>
        </form>
        <br>
        <br>
        <?php
            if($_POST)
            {
                $usuario = $_POST["txtUsuario"];
                $contra = $_POST["txtContra"];
                $conexion = mysqli_connect('localhost', 'root', '', 'Escuela', '3306');
                $consulta = "SELECT * FROM Usuarios WHERE usuario = '$usuario' AND contrasenia = sha1('$contra')" ;
                $resultado = mysqli_query($conexion, $consulta);
                $mostrar=mysqli_fetch_array($resultado);
                if($mostrar)
                    header("Location: crud.php");
                else
                {
                    ?>
                    <h4 class="error"> DATOS INCORRECTOS </h4>
                    <?php
                }
                mysqli_close($conexion);
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>