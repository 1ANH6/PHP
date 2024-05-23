<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilov3.css"> 
</head>
<body>
    <a href="index3.php">Volver</a>
    <h1>1037. Juego de letras </h1>
    <table class = "limites">
        <tr><td>Puntos: 11.93</td></tr>
        <tr><td>Tiempo límite por caso: 1s</td></tr>
        <tr><td>Tiempo límite total: 1m0s</td></tr>
        <tr><td>Memoria límite: 32MiB</td></tr>
    </table>
    <h2>Descripción</h2>
    <p>
        En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su 
        posición en el teclado: las letras Q, A y Z reciben el valor <b>1</b>, las letras W, S y X reciben el 
        valor <b>2</b> y así sucesivamente hasta que las letras O y L reciben el valor <b>9</b> y
        la letra P recibe el valor <b>0</b>. Escribe un programa que determine el valor <b>v</b> de una palabra <b>p</b>.
    </p>  
    <h2>Entrada</h2>
    <p>
        Una cadena <b>p</b> formada exclusivamente por letras mayúsculas de la A a la Z.
    </p>
    <h2>Salida</h2>
    <p>
        Un número entero <b>v</b>.
    </p>
    <h2>Ejemplo</h2>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>UAM</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>15</td></tr>
    </table>
    <h2>Solución</h2>
    <form action="pr2.php" method="post">
        <table>
            <tr>
                <td>INTRODUCE LA PALABRA: </td>
                <td><input type="text" name="txtP"></td>
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
        $p = $_POST['txtP'];
        $n = strlen($p);
        function f($c)
        {
            if($c == 'Q' || $c == 'A' || $c == 'Z')
                return 1;
            else if($c == 'W' || $c == 'S' || $c == 'X')
                return 2;
            else if($c == 'E' || $c == 'D' || $c == 'C')
                return 3;
            else if($c == 'R' || $c == 'F' || $c == 'V')
                return 4;
            else if($c == 'T' || $c == 'G' || $c == 'B')
                return 5;
            else if($c == 'Y' || $c == 'H' || $c == 'N')
                return 6;
            else if($c == 'U' || $c == 'J' || $c == 'M')
                return 7;
            else if($c == 'I' || $c == 'K')
                return 8;
            else
                return 9;
        }
        $suma = 0;
        for($i = 0; $i < $n; $i++)
            $suma += f($p[$i]);
        echo "El resultado es: " . $suma. "<br>";
        echo "Palabra: ". $p. "<br>";
    }
?>
</body>
</html>