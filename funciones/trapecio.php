<?php 

function trapecio($a,$b,$c,$d,$x)
 {

    if($x <= $a || $x >= $d)
    {
        $y = 0;
    }

    else if($a <= $x && $x <= $b)
    {
        $y = ($x - $a)/($b - $a);
    }
    
    else if($c <= $x && $x <= $d)
    {
        $y = ($d - $x)/($d - $c);
    }   

    else 
    {
        $y = 1;
    }
    return $y*100;
 }

?>