<?php 
    $conexion = mysqli_connect('localhost', 'root', '', 'Escuela', '3306');
    session_start();
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $consulta = "SELECT * FROM Alumnos WHERE id = '$id'";
        $resultado = mysqli_query($conexion, $consulta);
        if(mysqli_num_rows($resultado) == 1)
        {
            $fila = mysqli_fetch_array($resultado);
            $mat = $fila["matricula"]; 
            $ape = $fila["apellidos"]; 
            $nom = $fila["nombre"]; 
            $fec = $fila["fecha_nacimiento"];
            $dir = $fila["direccion"];
            $tel = $fila["telefono"];
            $cor = $fila["correo"];
            $tut = $fila["tutor"];
        }
    }
    if(isset($_POST["actualizar"]))
    {
        $id = $_GET["id"];
        $mat = $_POST["mat"]; 
        $ape = $_POST["ape"]; 
        $nom = $_POST["nom"]; 
        $fec = $_POST["fec"];
        $dir = $_POST["dir"];
        $tel = $_POST["tel"];
        $cor = $_POST["cor"];
        $tut = $_POST["tut"];
        $consulta = "UPDATE Alumnos SET matricula = '$mat', apellidos = '$ape', nombre = '$nom', fecha_nacimiento = '$fec', direccion = '$dir', telefono = '$tel', correo = '$cor', tutor = '$tut' WHERE id = '$id' ";
        $resultado = mysqli_query($conexion, $consulta);
        $_SESSION["message"] = "Registro actualizado correctamente";
        $_SESSION["message_type"] = "info";
        header("Location: crud.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="styleactu.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <h1><a href="crud.php" id="inicio">CONTROL</a></h1>
        </nav>
    </header>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <br>
                <h1 class="titulo">Actualice los datos</h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="actualizar.php?id=<?php echo $_GET["id"]; ?>" method="post">
                        <div class="form-group">
                            <input type="text" name="mat" value="<?php echo $mat; ?> " class="form-control" placeholder="Matricula">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ape" value="<?php echo $ape; ?> " class="form-control" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nom" value="<?php echo $nom; ?> " class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fec" value="<?php echo $fec; ?> " class="form-control" placeholder="Fecha de Nacimiento">
                        </div>
                        <div class="form-group">
                            <input type="text" name="dir" value="<?php echo $dir; ?> " class="form-control" placeholder="Direccion">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tel" value="<?php echo $tel; ?> " class="form-control" placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <input type="text" name="cor" value="<?php echo $cor; ?> " class="form-control" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tut" value="<?php echo $tut; ?> " class="form-control" placeholder="Tutor">
                        </div>
                        <button class="btn btn-success" name="actualizar" id="btn-envio">   
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>