<?php
    $arr = array();
    $n = rand(1, 1000);
    for($i = 1; $i <= $n; $i++)
        array_push($arr, rand(0, 10));
    echo "Tamaño: ", $n, "<br>";
    $suma = 0;
    for($i = 0; $i < $n; $i++)
        $suma += $arr[$i];
    $prom = $suma / $n;
    echo "Promedio: ", round($prom, 2), "<br>";
    $mp = 0;
    for($i = 0; $i < $n; $i++)
        if($arr[$i] >= $prom)
            $mp++;
    echo "Alumnos mayores al promedio: ", $mp, "<br>";
    $ca = 0; $cr = 0;
    for($i = 0; $i < $n; $i++)
        if($arr[$i] >= 6)
            $ca++;
        else
            $cr++;
    $pa = $ca / $n * 100;
    $pr = $cr / $n * 100;
    echo "Cantidad de aprobados: ", $ca, "<br>";
    echo "Porcentaje de aprobados: ", round($pa, 2), "%<br>";
    echo "Cantidad de reprobados: ", $cr, "<br>";
    echo "Porcentaje de reprobados: ", round($pr, 2), "%<br>";
    if($n > 1)
    {
        $suma = 0;
        for($i = 0; $i < $n; $i++)
            $suma += pow($arr[$i] - $prom, 2);
        $ds = $suma / ($n-1);
        echo "Desviación Estándar: ", round($ds, 2), "<br>";
        
    }
    else
        echo "Desviación Estándar: 0<br>"; 
    echo "<table border=1>";
    for($i = 0; $i < $n; $i++)
    {
        if($i % 30 == 0)
            echo "<tr>";
        echo "<td>", $arr[$i], "</td>";
        if($i % 30 == 29)
            echo "</tr>";
    }
    if(($n-1) % 30 != 29)
        echo "</tr>";
    echo "</table>";
?>