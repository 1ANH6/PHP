<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilov2.css"> 
</head>
<body>
    <a href="index2.php">INICIO</a>
    <h1>3991. Adquisición de Letras</h1>
    <table class = "limites">
        <tr><td>Puntos: 11.58</td></tr>
        <tr><td>Tiempo límite por caso: 1s</td></tr>
        <tr><td>Tiempo límite total: 1m0s</td></tr>
        <tr><td>Memoria límite: 32MiB</td></tr>
    </table>
    <h2>Descripción</h2>
    <p>
        En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere saber cuántas se va a 
        poder comer de un paquete que la escuela proporciona a todos sus alumnos. El paquete que la escuela entrega es una palabra con letras 
        minúsculas del alfabeto.
    </p>
    <h2>Entrada</h2>
    <p>
        Un solo string de letras minúsculas.
    </p>
    <h2>Salida</h2>
    <p>
        La cantidad de veces que aparece la letra favorita de Miguel.
    </p>
    <h2>Ejemplo</h2>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>abcjdlllld</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>2</td></tr>
    </table>
    <h2>Solución</h2>
    <form action="pr3.php" method="post">
        <table>
            <tr>
                <td>Cadena: </td>
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
            $n = strlen($s);
            for($i = 0; $i < $n; $i++)
                if($s[$i] == 'd')
                    $cnt++;
            echo "Veces que aparece d: ", $cnt;
        }
    ?>
</body>
</html>