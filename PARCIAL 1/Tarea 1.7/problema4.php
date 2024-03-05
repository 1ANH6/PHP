<html>
<head>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <a href="index1.php">INICIO</a>
    <h1>11338. Escalera de asteriscos</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>9.01</td>
            <th>Límite de memoria</th>
            <td>32 MiB</td>
        </tr>
        <tr>
            <th>Límite de tiempo (caso)</th>
            <td>1s</td>
            <th>Límite de tiempo (total)</th>
            <td>1m0s</td>
        </tr>
        <tr>
            <th>Tamaño límite de entrada (bytes)</th>
            <td>10 KiB</td>
            <td colspan = "2"></td>
        </tr>
    </table>
    <h2>Descripción</h2>
    <p>
        Tu misión es construir una escalera de longitud y altura N de numerales.
    </p>
    <h2>Entrada</h2>
    <p>
        Un entero N.
    </p>
    <h2>Salida</h2>
    <p>
        Una escalera de numerales de altura y longitud N.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>2</td>
            <td>#<br>##</td>
        </tr>
        <tr>
            <td>5</td>
            <td>#<br>##<br>###<br>####<br>#####</td>
        </tr>
        <tr>
            <td>1</td>
            <td>#</td>
        </tr>
        <tr>
            <td>3</td>
            <td>#<br>##<br>###</td>
        </tr>
    </table>
    <h2>Solución</h2>
    <form action="problema4.php" method="post">
        <table>
            <tr>
                <td>INTRODUCE N: </td>
                <td><input type="text" name="txtN"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
<?php
    if($_POST)
    {
        $n = $_POST["txtN"];
        for($i = 0; $i < $n; $i++)
        {
            for($j = 0; $j <= $i; $j++)
                echo "#";
            echo "<br>";
        }
    }
?>