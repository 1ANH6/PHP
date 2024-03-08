<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilov2.css"> 
</head>
<body>
    <h1>5630. Colegiatura</h1>
    <table class = "limites">
        <tr><td>Puntos: 11.51</td></tr>
        <tr><td>Tiempo límite por caso: 1s</td></tr>
        <tr><td>Tiempo límite total: 1m0s</td></tr>
        <tr><td>Memoria límite: 32MiB</td></tr>
    </table>
    <h2>Descripción</h2>
    <p>
        El esquema de una preparatoria para el pago de las colegiaturas es el siguiente:
    </p>
    <li>La colegiatura de los alumnos se determina según el numero de materias que cursan. 
        El costo de cada una de las materias es de $1600.</li>
    
    <li>Si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento del 30% sobre 
        la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa,
         mas el IVA del 16%.</li>
    <h2>Entrada</h2>
    <p>
        El numero de materias <b>A</b> que Esteban va a cursar. Y un numero con decimales <b>B</b> que es el promedio de Esteban
    </p>
    <h2>Salida</h2>
    <p>
        Un numero entero <b>C</b> con el precio a pagar. Debe de ir con un $.
    </p>
    <h2>Ejemplo</h2>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td> 5 <br> 9.6 </td></tr>
        <tr><th>Salida</th></tr>
        <tr><td> $5600 </td></tr>
    </table>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td> 8 <br> 7.8 </td></tr>
        <tr><th>Salida</th></tr>
        <tr><td> $14848 </td></tr>
    </table>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td> 2 <br> 8 </td></tr>
        <tr><th>Salida</th></tr>
        <tr><td> $3712 </td></tr>
    </table>
    <h2>Solución</h2>
    <form action="cole.php" method="post">
        <table>
            <tr>
                <td>A: </td>
                <td><input type="text" name="txtA"></td>
            </tr>
            <tr>
                <td>B: </td>
                <td><input type="text" name="txtB"></td>
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
            $a = $_POST["txtA"];
            $b = $_POST["txtB"];
            $r = $a * 1600;
            if($b >= 9)
                $r = $r - $r * 0.3;
            else
                $r = $r + $r * 0.16;
            echo "Respuesta: $", $r;
        }
    ?>
</body>
</html>