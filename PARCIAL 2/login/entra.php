<?php
    if($_POST)
    {
        $user = $_POST["txtUser"];
        $pass = $_POST["txtPass"];
        $conexion = mysqli_connect('localhost', 'root', '', 'sistema', '3306');
        $consulta = "SELECT * FROM Usuarios WHERE login = '$user' AND Password = sha1('$pass')" ;
        $resultado = mysqli_query($conexion, $consulta);
        $mostrar=mysqli_fetch_array($resultado);
        if($mostrar)
            echo "<h1> BIENVENIDO </h1>";
        else    
            echo "<h1> ACCESO DENEGADO </h>";
        mysqli_close($conexion);
    }
?>