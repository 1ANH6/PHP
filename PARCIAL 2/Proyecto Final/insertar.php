<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'Escuela', '3306');
    session_start();
    if(isset($_POST["Guardar"]))
    {
        $mat = $_POST["txtMat"];
        $ape = $_POST["txtApe"];
        $nom = $_POST["txtNom"];
        $fec = $_POST["txtFec"];
        $dir = $_POST["txtDir"];
        $tel = $_POST["txtTel"];
        $cor = $_POST["txtCor"];
        $tut = $_POST["txtTut"];
        $consulta = "INSERT INTO Alumnos (matricula, apellidos, nombre, fecha_nacimiento, direccion, telefono, correo, tutor) VALUES ('$mat', '$ape', '$nom', '$fec', '$dir', '$tel', '$cor', '$tut')";
        $resultado = mysqli_query($conexion, $consulta);
        if(!$resultado)
        {
            die("Fallo");
        }
        $_SESSION['message'] = 'Alumno registrado correctamente';
        $_SESSION["message_type"] = 'success';
        header("Location: crud.php");
    }
?>