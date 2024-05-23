<?php 
    $conexion = mysqli_connect('localhost', 'root', '', 'Escuela', '3306');
    session_start();
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $consulta = "DELETE FROM Alumnos WHERE id = '$id'";
        $resultado = mysqli_query($conexion, $consulta);
        if(!$resultado)
        {
            die("Fallo");
        }
        $_SESSION["message"] = "Alumno eliminado correctamente";
        $_SESSION["message_type"] = "danger";
        header("Location: crud.php");
    }
?>