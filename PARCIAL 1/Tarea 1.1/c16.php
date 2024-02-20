<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
    <h1>12662. C16</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>16.79</td>
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
        Se quiere formar equipos de m integrantes, para ello recibes una cantidad n de estudiantes. 
        Imprime la cantidad de equipos que se pueden formar, y los estudiantes que se quedarán sin equipo.
    </p>
    <h2>Entrada</h2>
    <p>
        Dos números que representen el número de estudiantes y el número de estudiantes por equipo
    </p>
    <h2>Salida</h2>
    <p>
        Salida con el número de equipos formados y los estudiantes sin equipo, escrito exactamente como en el ejemplo
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>5 <br> 4</td>
            <td>Equipos formados: 1 <br> Estudiantes sin equipo: 1</td>
        </tr>
        <tr>
            <td>18 <br> 3</td>
            <td>Equipos formados: 6 <br> Estudiantes sin equipo: 0</td>
        </tr>
    </table>
    <h2>Solución</h2>
<?php
    $n = 13; $m = 3;
    echo "n: ", $n, "<br>m: ", $m;
    echo "<br>Equipos formados: ", round($n/$m);
    echo "<br>Estudiantes sin equipo: ", $n%$m;
?>
</body>
</html>