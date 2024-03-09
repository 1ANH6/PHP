<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilov2.css"> 
</head>
<body>
    <a href="index2.php">INICIO</a>
    <h1>4886. Autores</h1>
    <table class = "limites">
        <tr><td>Puntos: 12.44</td></tr>
        <tr><td>Tiempo límite por caso: 1s</td></tr>
        <tr><td>Tiempo límite total: 1m0s</td></tr>
        <tr><td>Memoria límite: 32MiB</td></tr>
    </table>
    <h2>Descripción</h2>
    <p>
        Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. 
        Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo 
        notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos científicos 
        anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes: la variación corta 
        (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) 
        Apellidos completos separados por guiones. Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable 
        y quisiera que usted escribiera un programa que transformara variaciones largas en cortas
    </p>
    <h2>Entrada</h2>
    <p>
        La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión. 
        El primer carácter siempre será una letra mayúscula. Los guiones siempre serán seguidos por una letra mayúscula. Todos los demás 
        caracteres serán letras minúsculas.
    </p>
    <h2>Salida</h2>
    <p>
        La primera y única línea de salida debe contener la variación corta apropiada.
    </p>
    <h2>Ejemplo</h2>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>Knuth-Morris-Pratt</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>KMP</td></tr>
    </table>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>Mirko-Slavko</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>MS</td></tr>
    </table>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td>Pasko-Patak</td></tr>
        <tr><th>Salida</th></tr>
        <tr><td>PP</td></tr>
    </table>
    <h2>Solución</h2>
    <form action="pr2.php" method="post">
        <table>
            <tr>
                <td>Nombre: </td>
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
            $n = strlen($s);
            echo "Variación corta: ";
            for($i = 0; $i < $n; $i++)
                if($s[$i] <= 'Z' && $s[$i] >= 'A')
                    echo $s[$i];
        }
    ?>
</body>
</html>