<html>
<head>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <a href="index1.php">INICIO</a>
    <h1>7050. Cálculos condicionales</h1>
    <table cellspacing = "17" class = "limites">
        <tr>
            <th>Puntos</th>
            <td>8.49</td>
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
        Dado un número N, realizar los siguientes pasos:
    </p>
    <li>Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1.</li>
    <li>Si el valor actual de N tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.</li>
    <li>Si el valor actual de N es un múltiplo de tres, réstale uno.</li>
    <h2>Entrada</h2>
    <p>
        Un entero N. Puedes suponer que 1 ≤ N ≤ 1000.
    </p>
    <h2>Salida</h2>
    <p>
    Dos enteros que correspondan con el valor final de N y el número de veces que N fue modificado respectivamente.
    </p>
    <h2>Ejemplo</h2>
    <table cellspacing = "5" class = "casos">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>7</td>
            <td>8 1</td>
        </tr>
    </table>
    <h2>Solución</h2>
    <form action="problema1.php" method="post">
        <table>
            <tr>
                <td>INTRODUCE N: </td>
                <td><input type="text" name="txtN"></td>
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
        $n = $_POST["txtN"];
        $cnt = 1;
        if($n % 2)
            $n++;
        else    
            $n/=2;
        if($n >= 100)
        {
            $n = floor($n / 100);
            $cnt++;
        }
        elseif($n >= 10)
        {
            $n = floor($n / 10);
            $cnt++;
        }
        if($n % 3 == 0)
        {
            $n--;
            $cnt++;
        }  
        echo "Respuesta: ", $n, " ", $cnt;
    }
?>