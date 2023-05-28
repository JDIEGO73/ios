<?php 

$resultado="";
$arreglo_agregacion[100]=null;
$guardar=0;
$pertenencia=0;
$salida_1[100]=null;
$salida_2[100]=null;
$salida_3[100]=null;
$suma=0;
$centroide=0;
$numerador=0;
$denominador=0;

for ($x=0; $x <= 100 ; $x++) 
{
	$arreglo_agregacion[$x]=0;
	$salida_1[$x]=triangulo(-40,0,60,$x);
	$salida_2[$x]=triangulo(40,50,80,$x);
	$salida_3[$x]=gaus(11,100,$x);
}


//Reglas___________________________________

for ($x=0; $x <= 100 ; $x++) 
{
	//1
	if ($arreglo_1[0] != 0 && $arreglo_2[0] != 0 && $arreglo_3[0] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[0],$arreglo_3[0]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//2
	if ($arreglo_1[0] != 0 && $arreglo_2[0] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[0],$arreglo_3[1]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//3
	if ($arreglo_1[0] != 0 && $arreglo_2[0] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[0],$arreglo_3[2]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//4
	if ($arreglo_1[0] != 0 && $arreglo_2[1] != 0 && $arreglo_3[0] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[1],$arreglo_3[0]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//5
	if ($arreglo_1[0] != 0 && $arreglo_2[1] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[1],$arreglo_3[1]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//6
	if ($arreglo_1[0] != 0 && $arreglo_2[1] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[1],$arreglo_3[2]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//7
	if ($arreglo_1[0] != 0 && $arreglo_2[2] != 0 && $arreglo_3[0] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[2],$arreglo_3[0]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//8
	if ($arreglo_1[0] != 0 && $arreglo_2[2] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[2],$arreglo_3[1]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//9
	if ($arreglo_1[0] != 0 && $arreglo_2[2] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[0],$arreglo_2[2],$arreglo_3[2]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//10
	if ($arreglo_1[1] != 0 && $arreglo_2[0] != 0 && $arreglo_3[0] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[0],$arreglo_3[0]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//11
	if ($arreglo_1[1] != 0 && $arreglo_2[0] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[0],$arreglo_3[1]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//12
	if ($arreglo_1[1] != 0 && $arreglo_2[0] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[0],$arreglo_3[2]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//13
	if ($arreglo_1[1] != 0 && $arreglo_2[1] != 0 && $arreglo_3[0] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[1],$arreglo_3[0]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//14
	if ($arreglo_1[1] != 0 && $arreglo_2[1] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[1],$arreglo_3[1]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//15
	if ($arreglo_1[1] != 0 && $arreglo_2[1] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[1],$arreglo_3[2]);
		$pertenencia=3;
		include "agregacion.php";
	}
	//16
	if ($arreglo_1[1] != 0 && $arreglo_2[2] != 0 && $arreglo_3[0] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[2],$arreglo_3[0]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//17
	if ($arreglo_1[1] != 0 && $arreglo_2[2] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[2],$arreglo_3[1]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//18
	if ($arreglo_1[1] != 0 && $arreglo_2[2] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[1],$arreglo_2[2],$arreglo_3[2]);
		$pertenencia=3;
		include "agregacion.php";
	}
	//19
	if ($arreglo_1[2] != 0 && $arreglo_2[0] != 0 && $arreglo_3[0] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[0],$arreglo_3[0]);
		$pertenencia=1;
		include "agregacion.php";
	}
	//20
	if ($arreglo_1[2] != 0 && $arreglo_2[0] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[0],$arreglo_3[1]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//21
	if ($arreglo_1[2] != 0 && $arreglo_2[0] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[0],$arreglo_3[2]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//22
	if ($arreglo_1[2] != 0 && $arreglo_2[1] != 0 && $arreglo_3[0] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[1],$arreglo_3[0]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//23
	if ($arreglo_1[2] != 0 && $arreglo_2[1] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[1],$arreglo_3[1]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//24
	if ($arreglo_1[2] != 0 && $arreglo_2[1] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[1],$arreglo_3[2]);
		$pertenencia=3;
		include "agregacion.php";
	}
	//25
	if ($arreglo_1[2] != 0 && $arreglo_2[0] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[0],$arreglo_3[2]);
		$pertenencia=2;
		include "agregacion.php";
	}
	//26
	if ($arreglo_1[2] != 0 && $arreglo_2[2] != 0 && $arreglo_3[1] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[2],$arreglo_3[1]);
		$pertenencia=3;
		include "agregacion.php";
	}
	//27
	if ($arreglo_1[2] != 0 && $arreglo_2[2] != 0 && $arreglo_3[2] != 0)
	{
		$tope=min($arreglo_1[2],$arreglo_2[2],$arreglo_3[2]);
		$pertenencia=3;
		include "agregacion.php";
	}
	//

	//echo "<br><br>";
	$arreglo_agregacion[$x]=round($arreglo_agregacion[$x]);
	//echo $arreglo_agregacion[$x];
	//echo "<br>";
	 
	$numerador=$numerador+($arreglo_agregacion[$x]*$x);
	$denominador=$denominador+($arreglo_agregacion[$x]);
}

echo "<br>";
$centroide=$numerador/$denominador;
$centroide=round($centroide);
echo "La calidad del dispositivo es = ".$centroide."%";

?>