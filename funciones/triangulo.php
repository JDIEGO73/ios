<?php 

function triangulo($a,$b,$c,$x)
{
       if($x <= $a)
       {
              $y = 0;
       }

       else if($a <= $x && $x <= $b)
       {
              $y = ($x - $a)/($b - $a);
       }
                     
       else if($b <= $x && $x <= $c)
       {
              $y = ($c - $x)/($c - $b);
       }

       else
       {
              $y = 0;
       }

return $y*100;              

}
?>