<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilov2.css"> 
</head>
<body>
    <h1>2765. Sumando dos conjuntos</h1>
    <table class = "limites">
        <tr><td>Puntos: 9.95</td></tr>
        <tr><td>Tiempo límite por caso: 1s</td></tr>
        <tr><td>Tiempo límite total: 1m0s</td></tr>
        <tr><td>Memoria límite: 32MiB</td></tr>
    </table>
    <h2>Descripción</h2>
    <p>
        Dados dos conjuntos de enteros <b>a</b> y <b>b</b> de tamaño <b>N</b> (1 ≤ <b>N</b> ≤ 100). Obtener la suma de <b>a</b><i>i</i>
        + <b>b</b><i>i</i>, para cada <i>i</i> de 1 a <b>N</b>
    </p>  
    <h2>Entrada</h2>
    <p>
        En la primera línea el entero <b>N</b>. En la segunda línea, separados por un espacio, los números del primer conjunto.
        En la tercera línea también separados por un espacio, los números del segundo conjunto.
    </p>
    <h2>Salida</h2>
    <p>
        Los números resultantes de sumar ambos conjuntos, separados por un espacio.
    </p>
    <h2>Ejemplo</h2>
    <table class="casos">
        <tr><th>Entrada</th></tr>
        <tr><td> 4 <br> 2 3 4 5 <br> 6 7 1 4 </td></tr>
        <tr><th>Salida</th></tr>
        <tr><td> 8 10 5 8 </td></tr>
    </table>
    <h2>Solución</h2>
    <?php
       $n = rand(1, 100);
       $arr1 = array();
       $arr2 = array();
       echo "N: ", $n, "<br>";
       echo "Arreglo 1: ";
       for($i = 0; $i < $n; $i++)
       {
            array_push($arr1, rand(1, 100));
            echo $arr1[$i], " ";
       }
       echo "<br>";
       echo "Arreglo 2: ";
       for($i = 0; $i < $n; $i++)
       {
            array_push($arr2, rand(1, 100));
            echo $arr2[$i], " ";
       }
       echo "<br>";
       echo "Sumas : ";
       for($i = 0; $i < $n; $i++)
            echo $arr1[$i] + $arr2[$i], " ";
    ?>
</body>
</html>