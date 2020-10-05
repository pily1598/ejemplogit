<a href="index.php">Inicio</a><br>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> P1_AI6 Funciones</title>
</head>


<?php

//Declaración de la función
function imprimirTitulo(){
    echo "<br><strong>Título 1</strong><br>";
}

//Implementación
imprimirTitulo();

//No se puede establecer dos funciones con el mismo nombre
//------------
function imprimirPasandoParametro($titulo){
    echo "<br><strong>$titulo</strong><br>";
}

$tituloEntrada = "Título Ingresado";
imprimirPasandoParametro($tituloEntrada); //En este caso se está llevando lo que está dentro del paréntesis a la función

//------------
function imprimirPasandoDefault($titulo = "Sin titulo"){
    echo "<br><strong>$titulo</strong><br>";
}

$tituloEntrada = "Función con parámetro por defecto";
imprimirPasandoParametro($tituloEntrada); //En este caso se está llevando lo que está dentro del paréntesis a la función


//-------

function getTitulo($titulo){
    return "<br><strong>$titulo</strong><br>";
}

$tituloRetornado = getTitulo("Titulo 4");
echo $tituloRetornado;

//-------

function getTituloImprimiendo($titulo){
    echo "<br><strong>$titulo (Impreso desde función )</strong><br>";
    return "<br><strong>$titulo (Impreso desde Variable) </strong><br>";
}

$tituloRetornado = getTituloImprimiendo("Titulo 5");
echo $tituloRetornado;

//-------------
function sumaUno($numero){ //Por valor
    $numero++;
    echo "<br>$numero<br>";
}

sumaUno(1);

//-------------
function sumaUno1(&$numero){ //Por referencia
    $numero++;

}

$numeroEntrada = 1;
sumaUno1($numeroEntrada);
echo $numeroEntrada;


?>