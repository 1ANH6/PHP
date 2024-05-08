<?php
    if($_POST)
    {
        function g($b, $c)
        {
            $r = (7*$b-3) % ($c*$c+1);
            return $r;
        }
        function f($a)
        {
            $r = 4*$a*$a*$a + g(2*$a, -3*$a);
            return $r;
        }
        function h($x, $y, $z)
        {
            $r = f($x/$y) + 3 * 
        }
    }
?>