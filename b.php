<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultados</title>
</head>
<body bgcolor="#222020" text="#494DF3">

<?php 

include "funciones/triangulo.php";
include "funciones/trapecio.php";
include "funciones/gaus.php";

	$Arreglo_1=[null];
	$Arreglo_2=[null];
	$Arreglo_3=[null];

	$Y=[null];

	$x1=0;
	$x2=0;
	$x3=0;

	$x1=$_REQUEST["x1"];
	$x2=$_REQUEST["x2"];
	$x3=$_REQUEST["x3"];


	//Rendimiento
	$Arreglo_1[0]=triangulo(-30,0,40,$x1);
	$Arreglo_1[1]=trapecio(30,45,65,85,$x1);
	$Arreglo_1[2]=triangulo(70,100,150,$x1);

	//almacenamiento
	$Arreglo_2[0]=triangulo(-40,0,30,$x2);
	$Arreglo_2[1]=triangulo(20,50,70,$x2);
	$Arreglo_2[2]=gaus(17,99,$x2);
	
	//precio
	$Arreglo_3[0]=triangulo(-41,0,40,$x3);
	$Arreglo_3[1]=trapecio(30,40,70,76,$x3);
	$Arreglo_3[2]=triangulo(70,100,150,$x3);

	//resultado
	
	
	echo "<br><br><center>".$Arreglo_1[0]." / ".$Arreglo_1[1]." / ".$Arreglo_1[2]."<br><br>";
	echo $Arreglo_2[0]." / ".$Arreglo_2[1]." / ".$Arreglo_2[2]."<br><br>";	
	echo $Arreglo_3[0]." / ".$Arreglo_3[1]." / ".$Arreglo_3[2]."<br><br><br><br><center>";

	include "funciones/reglas.php";
?>

<br><br>
<form action="index.html">
	<button>Regresar</button>
</form>

</body>
</html>