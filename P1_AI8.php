<a href="index.php">Inicio</a><br>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> P1_AI8 POO</title>
</head>
<?php

include("P1_AI8_Functions.php");
include("P1_AI8_Modelo.php");

titulo("Crear Objeto");

/*------
$arrPesona=[
    "nombre" => "Eduardo",
    "edad" => 20
];
echo $arrPesona["nombre"]."<br>";

*/

$mPersona = new Persona();
$mPersona->nombre = "Eduardo";
$mPersona->edad = 30;
echo var_dump($mPersona);

$mPersona2 = new Persona();
$mPersona2->nombre = "Luis";
$mPersona2->edad = 77;
echo var_dump($mPersona2);


titulo("Impresión desde objeto");

$mPersona->saluda();
$mPersona2->saluda();


//-------

titulo("Impresión desde Variable");
$saludo=$mPersona->getSaludo();
echo $saludo;

titulo("Pasar Parámetros");
$mPersona2->saluda();
$mPersona->respondeSaludo($mPersona2->nombre);

//----------
titulo("Edad de Persona");
$mPersona2->setEdad($mPersona->edad);
echo var_dump($mPersona2);

//-------
titulo("Obtener Valores 2");
$edadPersona = $mPersona->getEdad();
echo $edadPersona. "<br>";


//-----
titulo("Obtener Variable estática");
echo persona::$mayoriaEdad."<br>";

//--------
titulo("Llamar función estática");{
    persona::funcionEstatica1(12);
    persona::funcionEstatica2();
}

?>