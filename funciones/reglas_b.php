<?php 

function reglas($num_1,$num_2,$num_3)
{

$pertenencia=0;
$tope=0;
$guardar=0;
$arreglo[100] = null;
/*
$num_1=5;
$num_2=2;
$num_3=3;
*/

for ($x=0; $x <= 100 ; $x++) 
{
	$arreglo[$x]=0;
}

if ($num_1 == 0 || $num_2 == 0 || $num_3 == 0)
{

}

else
{

//Reglas___________________________________
	$a=triangulo(-30,0,40,$num_1);
	$b=triangulo(-40,0,30,$num_2);
	$c=triangulo(-41,0,40,$num_3);
	if ($a > 0 && $b > 0 && $c > 0)
	{
		
		tope($a,$b,$c);
	}
//_________________________________________


//Calcular el tope_________________________
function	tope($num_1,$num_2,$num_3)
{
if ($num_1 < $num_2 && $num_1 < $num_3) 
	{
		$tope=$num_1;
	}

	if ($num_2 < $num_1 && $num_2 < $num_3) 
	{
		$tope=$num_2;
	}

	if ($num_3 < $num_2 && $num_3 < $num_1) 
	{
		$tope=$num_3;
	}
	if ($num_1 == $num_2 && $num_2 == $num_3) {
		$tope=$num_1;
	}
}
	
	for ($x=0; $x <= 100 ; $x++) 
{
	
			if ($pertenencia < $tope) 
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
		echo $arreglo[$x]."<br>";
		}
}

}
?>