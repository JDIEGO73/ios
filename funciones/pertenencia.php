<?php 

//Guardar pertenencia resultado malo_____________________
if ($resultado=="malo") 
{
	$pertenencia=$Y1[$x];
}

if ($resultado=="normal") 
{
	$pertenencia=$Y2[$x];
}

if ($resultado=="bueno") 
{
	$pertenencia=$Y3[$x];
}

if ($pertenencia >= $tope) 
	{
		$guardar=$tope;
	}
	
	else
	{
		$guardar = $pertenencia;
	}
	
	if ($guardar > $arreglo[$x]) 
	{
		$arreglo[$x]=$guardar;
	}
	
	else
	{}
//_________________________________________

?>