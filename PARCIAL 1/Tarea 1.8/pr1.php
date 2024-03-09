<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilov2.css"> 
</head>
<body>
    <a href="index2.php">INICIO</a>
    <h1>4352. Bit de paridad</h1>
    <table class = "limites">
        <tr><td>Puntos: 12.68</td></tr>
        <tr><td>Tiempo límite por caso: 1s</td></tr>
        <tr><td>Tiempo límite total: 1m0s</td></tr>
        <tr><td>Memoria límite: 32MiB</td></tr>
    </table>
    <h2>Descripción</h2>
    <p>
        Un <b>bit de paridad</b> es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar.
        Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método:
    </p>
    <li>Bit de paridad par</li>
    <li>Bit de paridad impar.</li>
    <p>
        En el caso de la <b>paridad par</b>, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece
        en uno y por tanto la suma del total anterior con este bit de paridad, daría par. Si el conteo de bits uno es par, 
        entonces el bit de paridad se deja en 0, pues ya es par. <br>
        Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
    </p>
    <h2>Entrada</h2>
    <p>
        La entrada consiste de una sola línea con una secuencia de siete bits <b>0</b> o <b>1</b>.
    </p>
    <h2>Salida</h2>
    <p>
        La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.
    </p>
    <h2>Ejemplo</h2>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>1010001</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>10100011</td></tr>
    </table>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>1101001</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>11010010</td></tr>
    </table>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>0000000</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>00000000</td></tr>
    </table>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>1111111</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>11111111</td></tr>
    </table>
    <p>
        En el primer caso. El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete 
        bits de la entrada y se añade un bit 1 para que en total el número de bits con valor 1 sea par.
    </p>
    <p>
        En el segundo caso. El número de bits con valor de 1 en la entrada es 4. La salida son los mismos siete bits
        de la entrada y se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par.
    </p>
    <h2>Solución</h2>
    <form action="pr1.php" method="post">
        <table>
            <tr>
                <td>Secuencia: </td>
                <td><input type="text" name="txtS"></td>
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
            $s = $_POST["txtS"];
            $cnt = 0;
            for($i = 0; $i < 7; $i++)
                if($s[$i] == '1')
                    $cnt++;
            if($cnt % 2)
                echo $s, "1";
            else   
                echo $s, "0";
        }
    ?>
</body>
</html>