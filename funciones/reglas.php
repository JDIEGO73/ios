<?php 

//Calcular el tope_________________________
function tope($num_1,$num_2,$num_3)
{	
	$tope=0;
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
	return $tope;
}
//_________________________________________

$resultado="";
$arreglo[100]=null;
$guardar=0;
$pertenencia=0;
$Y1[100]=null;
$Y2[100]=null;
$Y3[100]=null;
$suma=0;
$promedio=0;
$numerador=0;
$denominador=0;

for ($x=0; $x <= 100 ; $x++) 
{
	$arreglo[$x]=0;
	$Y1[$x]=triangulo(-40,0,60,$x);
	$Y2[$x]=triangulo(40,50,80,$x);
	$Y3[$x]=gaus(11,100,$x);
}


//Reglas___________________________________
for ($x=0; $x <= 100 ; $x++) 
{

//1____________________________________________________________________
	
	if ($Arreglo_1[0] == 0 || $Arreglo_2[0] == 0 || $Arreglo_3[0] == 0)
	{}

	else
	{
	$resultado="malo";
	$tope=tope($Arreglo_1[0],$Arreglo_2[0],$Arreglo_3[0]);
	include "pertenencia.php";
	}

//2_____________________________________________________________________

if ($Arreglo_1[0] == 0 || $Arreglo_2[1] == 0 || $Arreglo_3[0] == 0)
	{}

	else
	{
	$resultado="malo";
	$tope=tope($Arreglo_1[0],	$Arreglo_2[1],	$Arreglo_3[0]);
	include "pertenencia.php";
	}

//3_____________________________________________________________________

if ($Arreglo_1[1] == 0 || $Arreglo_2[0] == 0 || $Arreglo_3[0] == 0)
	{}

	else
	{
	$resultado="malo";
	$tope=tope($Arreglo_1[1],$Arreglo_2[0],$Arreglo_3[0]);
	include "pertenencia.php";
	}

//4____________________________________________________________________

if ($Arreglo_1[0] == 0 || $Arreglo_2[0] == 0 || $Arreglo_3[1] == 0)
	{}

	else
	{
	$resultado="malo";
	$tope=tope($Arreglo_1[0],$Arreglo_2[0],$Arreglo_3[1]);
	include "pertenencia.php";
	}

//5_____________________________________________________________________

if ($Arreglo_1[0] == 0 || $Arreglo_2[1] == 0 || $Arreglo_3[1] == 0)
	{}

	else
	{
	$resultado="malo";
	$tope=tope($Arreglo_1[0],	$Arreglo_2[1],	$Arreglo_3[1]);
	include "pertenencia.php";
	}

//6_____________________________________________________________________

if ($Arreglo_1[1] == 0 || $Arreglo_2[0] == 0 || $Arreglo_3[1] == 0)
	{}

	else
	{
	$resultado="normal";
	$tope=tope($Arreglo_1[1],	$Arreglo_2[0],	$Arreglo_3[1]);
	include "pertenencia.php";
	}

//7____________________________________________________________________
	
	if ($Arreglo_1[1] == 0 || $Arreglo_2[1] == 0 || $Arreglo_3[1] == 0)
	{}

	else
	{
	$resultado="normal";
	$tope=tope($Arreglo_1[1],$Arreglo_2[1],$Arreglo_3[1]);
	include "pertenencia.php";
	}

//8_____________________________________________________________________
	
	if ($Arreglo_1[1] == 0 || $Arreglo_2[1] == 0 || $Arreglo_3[2] == 0)
	{}

	else
	{
	$resultado="bueno";
	$tope=tope($Arreglo_1[1],$Arreglo_2[1],$Arreglo_3[2]);
	include "pertenencia.php";
	}

//9____________________________________________________________________
	if ($Arreglo_1[2] == 0 || $Arreglo_2[1] == 0 || $Arreglo_3[2] == 0)
	{}

	else
	{
	$resultado="bueno";
	$tope=tope($Arreglo_1[2],$Arreglo_2[1],$Arreglo_3[2]);
	include "pertenencia.php";
	}

//10_____________________________________________________________________

if ($Arreglo_1[2] == 0 || $Arreglo_2[2] == 0 || $Arreglo_3[2] == 0)
	{}

	else
	{
	$resultado="bueno";
	$tope=tope($Arreglo_1[2],	$Arreglo_2[2],	$Arreglo_3[2]);
	include "pertenencia.php";
	}

//11_____________________________________________________________________

if ($Arreglo_1[1] == 0 || $Arreglo_2[2] == 0 || $Arreglo_3[2] == 0)
	{}

	else
	{
	$resultado="normal";
	$tope=tope($Arreglo_1[1],	$Arreglo_2[2],	$Arreglo_3[2]);
	include "pertenencia.php";
	}

//12_____________________________________________________________________

if ($Arreglo_1[1] == 0 || $Arreglo_2[2] == 0 || $Arreglo_3[2] == 0)
	{}

	else
	{
	$resultado="malo";
	$tope=tope($Arreglo_1[1],	$Arreglo_2[2],	$Arreglo_3[2]);
	include "pertenencia.php";
	}

//13_____________________________________________________________________

if ($Arreglo_1[2] == 0 || $Arreglo_2[2] == 0 || $Arreglo_3[0] == 0)
	{}

	else
	{
	$resultado="malo";
	$tope=tope($Arreglo_1[2],	$Arreglo_2[2],	$Arreglo_3[0]);
	include "pertenencia.php";
	}

//14_____________________________________________________________________

if ($Arreglo_1[1] == 0 || $Arreglo_2[1] == 0 || $Arreglo_3[2] == 0)
	{}

	else
	{
	$resultado="bueno";
	$tope=tope($Arreglo_1[1],	$Arreglo_2[1],	$Arreglo_3[2]);
	include "pertenencia.php";
	}

//15_____________________________________________________________________

if ($Arreglo_1[0] == 0 || $Arreglo_2[1] == 0 || $Arreglo_3[2] == 0)
	{}

	else
	{
	$resultado="normal";
	$tope=tope($Arreglo_1[0],	$Arreglo_2[1],	$Arreglo_3[2]);
	include "pertenencia.php";
	}
//_________________________________________	
	$numerador=$numerador+($arreglo[$x]*$x);
	$denominador=$denominador+($arreglo[$x]);

		echo "$x - ";
		printf("%.2f", $arreglo[$x]);
		echo "<br><br>";
	 
}

$promedio=$numerador/$denominador;
$promedio=round($promedio);
echo "centroide = ".$promedio;
?>