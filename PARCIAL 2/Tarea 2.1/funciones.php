<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilov3.css"> 
</head>
<body>
    <a href="index2.php">Volver</a>
    <h1>17663. Practicando Funciones</h1>
    <table class = "limites">
        <tr><td>Puntos: 13.29</td></tr>
        <tr><td>Tiempo límite por caso: 1s</td></tr>
        <tr><td>Tiempo límite total: 1m0s</td></tr>
        <tr><td>Memoria límite: 32MiB</td></tr>
    </table>
    <h2>Descripción</h2>
    <p>
        Dados tres números enteros <b>x</b>, <b>y</b>, <b>z</b> calcula el valor de <b>h(x,y,z)</b>, 
        si las funciones <b>f</b>, <b>g</b> y <b>h</b> están definidas así:
    </p>  
    <div class="contenedor">
        <img src="func.png" alt="func">
    </div>
    <h2>Entrada</h2>
    <p>
        Tres números enteros <b>x, y, z</b> separados por un espacio. 
        Puedes suponer que <b>1 ≤ x,y,z ≤ 100</b> y que no se producirán divisiones entre cero.
    </p>
    <h2>Salida</h2>
    <p>
        El entero obtenido de evaluar <b>h(x,y,z)</b>.
    </p>
    <h2>Ejemplo</h2>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>-10 -4 18</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>-36</td></tr>
    </table>
    <h2>Solución</h2>
    <form action="funciones.php" method="post">
        <table>
            <tr>
                <td>INTRODUCE X: </td>
                <td><input type="text" name="txtX"></td>
            </tr>
            <tr>
                <td>INTRODUCE Y: </td>
                <td><input type="text" name="txtY"></td>
            </tr>
            <tr>
                <td>INTRODUCE Z: </td>
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
        $x = $_POST['txtX'];
        $y = $_POST['txtY'];
        $z = $_POST['txtZ'];
        function g($b, $c)
        {
            return ((7*(int)$b-3)%($c*$c+1));
        }

        function f($a)
        {
            return (4*pow((int)$a,3))+g(2*(int)$a,-3*(int)$a);
        }
        
        function h($x, $y, $z)
        {
            return f($x/$y)+3*g($z/$y,$x);
        }
        
        $res = h($x ,$y, $z);
        echo "El resultado es: " . $res. "<br>";
        echo "X: ". $x. "<br>";
        echo "Y: ". $y. "<br>";
        echo "Z: ". $z. "<br>";
    }
?>
</body>
</html>