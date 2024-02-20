<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
    <h1>12655. C09</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>14.92</td>
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
        Escribe un programa que solicite las calificaciones de tres materias, e imprima su promedio.
    </p>
    <h2>Entrada</h2>
    <p>
        Tres números reales.
    </p>
    <h2>Salida</h2>
    <p>
        Un número real representado el promedio de los tres números.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>10 9.5 9.0</td>
            <td>9.5</td>
        </tr>
    </table>
    <h2>Solución</h2>
<?php
    $a = 10; $b = 9.5; $c = 9.0;
    echo "a: ", $a, "<br>b: ", $b, "<br>c: ", $c, "<br>promedio: ";
    $prom = $a+$b+$c;
    $prom /= 3.0;
    echo $prom;
?>
</body>
</html>