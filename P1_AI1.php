<a href="index.php">Inicio</a><br><br>		

<strong>Impresion desde HTML</strong><br>
1+2
<hr>

<?php 
	echo "<strong>Comentarios</strong> <br>";

	// Este es un comentario de una linea
	/*
		Este es
		un comentario de
		varias 
		lineas
	*/

	$salto="<hr>";

	echo $salto;

	//-------------------------------------------------

	echo "<strong>Impresion desde PHP</strong> <br>";
	$variable=1;
	echo $variable;
	echo $salto;

	$variable="Hola ITI902";
	echo $variable;
	echo $salto;

	$variable=3.1416;
	echo $variable;
	echo $salto;

	$variable=true;
	echo $variable;
	echo $salto;

//-------------------------------------------------

	echo "<strong>Operaciones Aritmeticas</strong> <br>";

	$num1 = 2;
	$num2 = 3;

	echo $num1 + $num2;
	echo $salto;

	echo $num1 - $num2;
	echo $salto;

	echo $num1 * $num2;
	echo $salto;

	echo $num1 / $num2;
	echo $salto;

	echo 1 % 2; //para tener residuo
	echo $salto;

//-------------------------------------------------
	echo "<strong>Impresion desde doble comilla</strong> <br>";

	$variable1 = 3.1416;
	$variable2 = "Es el valor de PI";
	
	echo "$variable1 $variable2 .<br>";

	echo $salto;

//-------------------------------------------------
	echo "<strong>Impresion desde doble comilla</strong> <br>";

	$variable1 = "Primero";
	$variable2 = "Segundo";
	echo "$variable1 $variable2 .<br>";

	$variable1 = 1;
	$variable2 = 2;
	echo "$variable1 $variable2 .<br>";

	echo $salto;

//-------------------------------------------------
	echo "<strong>Verificar Variables</strong> <br>";

	if ( isset($variable1)){
		echo "Si esta declarada <br>";
	} else {
		echo "No esta declarada <br>";
	}

	$variable4 = 3.1245;
	echo var_dump($variable4);

	/*intval("1");
	strval();
	boolval();
	floatval();*/


	echo $salto;

?>
