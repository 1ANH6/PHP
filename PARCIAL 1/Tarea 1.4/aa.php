<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
    <h1>ESTACIONES</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>23.98</td>
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
        Dado un dos números enteros que representan el día y el mes, determinar su 
        estación del año, o si no existe tal fecha.
    </p>
    <h2>Entrada</h2>
    <p>
        Dos números enteros a y b separados por un espacio que corresponden al día y mes de una fecha determinada.

    </p>
    <h2>Salida</h2>
    <p>
        Las cadenas "Winter", "Spring", "Summmer", "Fall" o "no existe la fecha", según corresponda.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>15 10</td>
            <td>Fall</td>
        </tr>
        <tr>
            <td>22 3</td>
            <td>Spring</td>
        </tr>
        <tr>
            <td>31 4</td>
            <td>no existe la fecha</td>
        </tr>
    </table>
    <h2>Solución</h2>
<?php
    $a = 31; $b = 4;
    echo "a: ", $a, "<br>b: ", $b, "<br>r: ";
    if($b > 12 || ($b == 2 && $a > 28) || (($b == 1||$b==3||$b==5||$b==7||$b==8||$b==10||$b==12) && $a > 31) || ($b==4||$b==6||$b==9||$b==11) && $a > 30)
        echo "no existe la fecha";
    else
    {
        if(($b==12 && $a >= 21) || $b==1 || $b==2 || ($b==3 && $a < 21))
            echo "Winter";
        elseif(($b==3 && $a >= 21) || $b==4 || $b==5 || ($b==6 && $a <= 21))
            echo "Spring";
        elseif(($b==6 && $a >= 22) || $b==7 || $b==8 || ($b==9 && $a <= 22))
            echo "Summer";
        else
            echo "Fall";
    }
?>
    <HR>
    <BR>
    <h1>¿Cuántos valen 7?</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>10.21</td>
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
        Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.
    </p>
    <h2>Entrada</h2>
    <p>
        Dos enteros en el rango de -1000 a 1000.
    </p>
    <h2>Salida</h2>
    <p>
        La cantidad de enteros iguales a 7.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>-3 8</td>
            <td>0</td>
        </tr>
        <tr>
            <td>7 57</td>
            <td>1</td>
        </tr>
        <tr>
            <td>62 7</td>
            <td>1</td>
        </tr>
        <tr>
            <td>7 7</td>
            <td>2</td>
        </tr>
    </table>
    <h2>Solución</h2>
<?php
    $a = 7; $b = 4; $cnt = 0;
    echo "a: ", $a, "<br>b: ", $b, "<br>r: ";
    if($a == 7)
        $cnt++;
    if($b == 7)
        $cnt++;
    echo $cnt;
?>
    <HR>
    <BR>
    <h1>El mayor de tres números</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>10.13</td>
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
        Realiza un programa que imprima el mayor de tres números.
    </p>
    <h2>Entrada</h2>
    <p>
        Recibe tres números enteros a, b y c.
    </p>
    <h2>Salida</h2>
    <p>
        El número entero mayor de los tres números introducidos.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>10 <br> 8 <br> -7 <br></td>
            <td>10</td>
        </tr>
        <tr>
            <td>10 <br> 81 <br> 101 <br></td>
            <td>101</td>
        </tr>
        <tr>
            <td>11 <br> 11 <br> 11 <br></td>
            <td>11</td>
        </tr>
        <tr>
            <td>10 <br> 810 <br> 101 <br></td>
            <td>810</td>
        </tr>
    </table>
    <h2>Solución</h2>
<?php
    $a = 10; $b = 81; $c = 101;
    $may = $a;
    if($may < $b)
        $may = $b;
    if($may < $c)
        $may = $c;
    echo "a: ", $a, "<br>b: ", $b, "<br>c: ", $c, "<br>";
    echo "r: ", $may;
?>
</body>
</html>