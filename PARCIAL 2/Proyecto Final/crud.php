<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'Escuela', '3306');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="stylecrud.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <h1><a href="index.html" id="inicio">INICIO</a></h1>
        </nav>
    </header>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="titulo">Control de Alumnos</h1>
                <?php if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-<?= $_SESSION["message_type"] ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>
                <div class="card card-body">
                    <form action="insertar.php" method="post">
                        <div class="form-group">
                            <input type="text" name="txtMat" class="form-control" placeholder="Matricula" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtApe" class="form-control" placeholder="Apellidos" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtNom" class="form-control" placeholder="Nombre" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtFec" class="form-control" placeholder="Fecha de Nacimiento" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtDir" class="form-control" placeholder="Direccion" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtTel" class="form-control" placeholder="Telefono" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtCor" class="form-control" placeholder="Correo" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtTut" class="form-control" placeholder="Tutor" autofocus>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" id="btn-envio" name="Guardar" value="Registrar">
                    </form>
                </div>
            </div>
            
        </div>
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Apellidos</th>
                            <th>Nombre</th>
                            <th>Fecha_Nac</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Tutor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $cons = "SELECT * FROM Alumnos";
                            $res = mysqli_query($conexion, $cons);
                            while($fila = mysqli_fetch_array($res))
                            {
                                echo "<tr>";
                                echo "<td>"; echo $fila["matricula"]; echo "</td>";
                                echo "<td>"; echo $fila["apellidos"]; echo "</td>";
                                echo "<td>"; echo $fila["nombre"]; echo "</td>";
                                echo "<td>"; echo $fila["fecha_nacimiento"]; echo "</td>";
                                echo "<td>"; echo $fila["direccion"]; echo "</td>";
                                echo "<td>"; echo $fila["telefono"]; echo "</td>";
                                echo "<td>"; echo $fila["correo"]; echo "</td>";
                                echo "<td>"; echo $fila["tutor"]; echo "</td>";
                                ?>
                                <td>
                                    <a href="actualizar.php?id=<?php echo $fila["id"] ?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                                    <a href="eliminar.php?id=<?php echo $fila["id"] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                </td>
                            <?php  echo "</tr>"; }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>