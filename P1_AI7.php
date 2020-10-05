<a href="index.php">Inicio</a><br>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> P1_AI7 Include e Include_once</title>
</head>


<?php

include("P1_AI7_Functions.php");
include_once("P1_AI7_Functions.php");

//Declaración de la función


//Implementación
imprimirTitulo();

//No se puede establecer dos funciones con el mismo nombre
//------------


$tituloEntrada = "Título Ingresado";
imprimirPasandoParametro($tituloEntrada); //En este caso se está llevando lo que está dentro del paréntesis a la función

//------------


$tituloEntrada = "Función con parámetro por defecto";
imprimirPasandoParametro($tituloEntrada); //En este caso se está llevando lo que está dentro del paréntesis a la función


//-------



$tituloRetornado = getTitulo("Titulo 4");
echo $tituloRetornado;

//-------



$tituloRetornado = getTituloImprimiendo("Titulo 5");
echo $tituloRetornado;

//-------------


sumaUno(1);

//-------------


$numeroEntrada = 1;
sumaUno1($numeroEntrada);
echo $numeroEntrada;




?>