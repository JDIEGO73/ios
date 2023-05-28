<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultados</title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body bgcolor="#222020" text="#5DADE2">

<div class="contenedor">
	<div class="item">
		<h2>Resultados</h2>
<?php 

include "funciones/triangulo.php";
include "funciones/trapecio.php";
include "funciones/gaus.php";

	$arreglo_1=[null];
	$arreglo_2=[null];
	$arreglo_3=[null];

	$Y=[null];

	$x1=0;
	$x2=0;
	$x3=0;

	$x1=$_REQUEST["x1"];
	$x2=$_REQUEST["x2"];
	$x3=$_REQUEST["x3"];


	//Rendimiento
	$arreglo_1[0]=triangulo(-30,0,40,$x1);
	$arreglo_1[1]=trapecio(30,45,65,85,$x1);
	$arreglo_1[2]=triangulo(70,100,150,$x1);

	//almacenamiento
	$arreglo_2[0]=triangulo(-40,0,30,$x2);
	$arreglo_2[1]=triangulo(20,50,70,$x2);
	$arreglo_2[2]=gaus(17,99,$x2);
	
	//precio
	$arreglo_3[0]=triangulo(-41,0,40,$x3);
	$arreglo_3[1]=trapecio(30,40,70,76,$x3);
	$arreglo_3[2]=triangulo(70,100,150,$x3);

	//resultado

	if($arreglo_1[0] != 0)
	{
		echo "El Rendimiento es ".round($arreglo_1[0])."% malo";
		echo "<br>";
	}

	if($arreglo_1[1] != 0)
	{
		echo "El Rendimiento es ".round($arreglo_1[1])."% medio";
		echo "<br>";
	}

	if($arreglo_1[2] != 0)
	{
		echo "El Rendimiento es ".round($arreglo_1[2])."% bueno";
		echo "<br>";
	}
	echo "<br><br>";

//___________________________________________________________________

	if($arreglo_2[0] != 0)
	{
		echo "El almacenamiento es ".round($arreglo_2[0])."% malo";
		echo "<br>";
	}

	if($arreglo_2[1] != 0)
	{
		echo "El almacenamiento es ".round($arreglo_2[1])."% medio";
		echo "<br>";
	}

	if($arreglo_2[2] != 0)
	{
		echo "El almacenamiento es ".round($arreglo_2[2])."% bueno";
		echo "<br>";
	}
echo "<br><br>";
//___________________________________________________________________

	if($arreglo_3[0] != 0)
	{
		echo "El precio es ".round($arreglo_3[0])."% malo";
		echo "<br>";
	}

	if($arreglo_3[1] != 0)
	{
		echo "El precio es ".round($arreglo_3[1])."% medio";
		echo "<br>";
	}

	if($arreglo_3[2] != 0)
	{
		echo "El precio es ".round($arreglo_3[2])."% bueno";
		echo "<br>";
	}
echo "<br><br>";
	include "funciones/reglas.php";
?>

<br><br>
<form action="index.html">
	<button>Regresar</button>
</form>
</div></div>

</body>
</html>