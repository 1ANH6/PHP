<html>
<head>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <a href="index1.php">INICIO</a>
    <h1>7093. El lado más corto</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>8.68</td>
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
        Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.
    </p>
    <img src="cuadrilatero.png" alt="cuadrilatero">
    <h2>Entrada</h2>
    <p>
        Ocho reales x1, y1, x2, y2, x3, y3, x4, y4. Puedes suponer que 0 ≤ xi, yi ≤ 100.
    </p>
    <h2>Salida</h2>
    <p>
        Un real que sea la longitud del lado más corto del cuadrilátero.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>10.1 10.2<br>20.2 10.3<br>23.3 4.1<br>7.5 0.9</td>
            <td>6.545991</td>
        </tr>
    </table>
    <h2>Solución</h2>
    <form action="problema3.php" method="post">
        <table>
            <tr>
                <td>X1: </td>
                <td><input type="text" name="txtX1"></td>
            </tr>
            <tr>
                <td>Y1: </td>
                <td><input type="text" name="txtY1"></td>
            </tr>
            <tr>
                <td>X2: </td>
                <td><input type="text" name="txtX2"></td>
            </tr>
            <tr>
                <td>Y2: </td>
                <td><input type="text" name="txtY2"></td>
            </tr>
            <tr>
                <td>X3: </td>
                <td><input type="text" name="txtX3"></td>
            </tr>
            <tr>
                <td>Y3: </td>
                <td><input type="text" name="txtY3"></td>
            </tr>
            <tr>
                <td>X4: </td>
                <td><input type="text" name="txtX4"></td>
            </tr>
            <tr>
                <td>Y4: </td>
                <td><input type="text" name="txtY4"></td>
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
        $x1 = $_POST["txtX1"];
        $y1 = $_POST["txtY1"];
        $x2 = $_POST["txtX2"];
        $y2 = $_POST["txtY2"];
        $x3 = $_POST["txtX3"];
        $y3 = $_POST["txtY3"];
        $x4 = $_POST["txtX4"];
        $y4 = $_POST["txtY4"];
        $d1 = sqrt(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
        $d2 = sqrt(($x3-$x2)*($x3-$x2)+($y3-$y2)*($y3-$y2));
        $d3 = sqrt(($x4-$x3)*($x4-$x3)+($y4-$y3)*($y4-$y3));
        $d4 = sqrt(($x4-$x1)*($x4-$x1)+($y4-$y1)*($y4-$y1));
        echo "Respuesta: ", round(min(min($d1, $d2), min($d3, $d4)), 6);
    }
?>