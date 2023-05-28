<?php 

//Guardar pertenencia resultado malo_____________________
if($pertenencia==1) 
		{
			$salida=$salida_1[$x];
		}

		if($pertenencia==2) 
		{
			$salida=$salida_2[$x];
		}

		if($pertenencia==3) 
		{
			$salida=$salida_3[$x];
		}

		if($salida >= $tope) 
		{
			$guardar=$tope;
		}
	
		else
		{
			$guardar = $salida;
		}
	
		if ($guardar > $arreglo_agregacion[$x]) 
		{
			$arreglo_agregacion[$x]=$guardar;
		}
//_________________________________________

?>