<html>
<head>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <a href="index1.php">INICIO</a>
    <h1>18710. Formulota</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>16.93</td>
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
        Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).
    </p> 
    <img src="formulota.png" alt="formulota">
    <h2>Entrada</h2>
    <p>
        El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.
    </p>
    <h2>Salida</h2>
    <p>
        La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td>1<br>2<br>3</td>
            <td>0.235714</td>
            <td>0.235714285714286</td>
        </tr>
        <tr>
            <td>4<br>5<br>6</td>
            <td>0.074477</td>
            <td>0.0744773519163764</td>
        </tr>
        <tr>
            <td>7<br>8<br>9</td>
            <td>0.044525</td>
            <td>0.0445247435713634</td>
        </tr>
    </table>
    <h2>Solución</h2>
    <form action="problema2.php" method="post">
        <table>
            <tr>
                <td>X: </td>
                <td><input type="text" name="txtX"></td>
            </tr>
            <tr>
                <td>Y: </td>
                <td><input type="text" name="txtY"></td>
            </tr>
            <tr>
                <td>Z: </td>
                <td><input type="text" name="txtZ"></td>
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
        $x = $_POST["txtX"];
        $y = $_POST["txtY"];
        $z = $_POST["txtZ"];
        $r = ((($x+$y)/(2*$x))+(($x*$x*$x+$y*$y*$y)/($x*$x+$y*$y))) / ($x*$x+$y*$y+$z*$z);
        echo "Respuesta: ", round($r, 6);
    }
?>