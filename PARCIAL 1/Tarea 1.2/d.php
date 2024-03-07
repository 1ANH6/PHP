<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
    <h1>12618. Practicando con formulas</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>10.76</td>
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
        Dado un valor real a, quieres resolver una serie de ecuaciones hasta obtener el valor de z.
    </p>
    <h5>x = 3a + 15</h5>
    <h5>y = (x+3) / (x+1)</h5>
    <h5>z = (5x + 7y) / (axy)</h5>
    <h2>Entrada</h2>
    <p>
        Un real a. Puedes suponer que 1 ≤ a ≤ 100.
    </p>
    <h2>Salida</h2>
    <p>
        Un real que sea el valor de z impreso con tres puntos decimales.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>33.562</td>
            <td>0.148</td>
        </tr>
        <tr>
            <td>72.569</td>
            <td>0.069</td>
        </tr>
        <tr>
            <td>64.835</td>
            <td>0.077</td>
        </tr>
    </table>
    <h2>Solución</h2>
    <?php
        $a = 33.562;
        $x = 3*$a + 15;
        $y = ($x+3) / ($x+1);
        $z = (5*$x+7*$y) / ($a*$x*$y);
        echo "a: ", $a, "<br>";
        echo "z: ", $z; "<br>";  
    ?>
</body>
</html>