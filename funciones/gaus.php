<?php 

function gaus($b,$c,$x)
 
 { 

 $y=exp(-($x-$c)*($x-$c)/(2*($b*$b)));
 $y = round($y,4);

 return $y*100;

 }

?>