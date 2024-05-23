<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilov3.css"> 
</head>
<body>
    <a href="index3.php">Volver</a>
    <h1>11823. Evaluando Una Función Rara</h1>
    <table class = "limites">
        <tr><td>Puntos: 13.22</td></tr>
        <tr><td>Tiempo límite por caso: 1s</td></tr>
        <tr><td>Tiempo límite total: 1m0s</td></tr>
        <tr><td>Memoria límite: 32MiB</td></tr>
    </table>
    <h2>Descripción</h2>
    <p>
        Evaluar de forma correcta <b>f(x)</b> dado el valor de <b>x</b>.
    </p>  
    <div class="contenedor">
        <img src="func2.png" alt="func">
    </div>
    <h2>Entrada</h2>
    <p>
        Un entero <b>-100 ≤ x ≤ 100</b>, el valor a utilizar para evaluar <b>f(x)</b>.
    </p>
    <h2>Salida</h2>
    <p>
        El resultado de <b>f(x)</b>.
    </p>
    <h2>Ejemplo</h2>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>-78</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>6162</td></tr>
    </table>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>28</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>-700</td></tr>
    </table>
    <h2>Solución</h2>
    <form action="pr1.php" method="post">
        <table>
            <tr>
                <td>INTRODUCE X: </td>
                <td><input type="text" name="txtX"></td>
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
        function f($x)
        {
            if($x < 0)
                return ($x*$x-$x);
            else
                return (-($x*$x) + 3*$x);
        }
        echo "El resultado es: " . f($x). "<br>";
        echo "X: ". $x. "<br>";
    }
?>
</body>
</html>