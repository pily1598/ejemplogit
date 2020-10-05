<a href="index.php">Inicio</a><br><br>		

	<?php

	$salto="<hr>";
	echo "$salto";
//-------------------------------------------------

	echo "<strong> If </strong> <br>";

	//&& son correctas ambas
	//|| al menos una es correcta
	if (1 == 1 && 1 == 2) {
		echo "Son correctas las dos comparaciones";
	} else {
		echo "Son diferentes";
	}

	echo "$salto";

//-------------------------------------------------
	echo "<strong> If directo </strong> <br>";
	//Valor true 
	//Valor numero diferente de 0
	//String no vacio siempre marcara correcto

	$variable = "34.23";
	if ($variable) {
		echo "Es verdadero";
	} else {
		echo "Es falso";
	}
	echo "$salto";

	//-------------------------------------------------
	echo "<strong> Switch </strong> <br>";

	$variable = 1; 
	switch ($variable=3) {
		case 1: echo "Es el primero"; break;
		case 2: echo "Es el segundo"; break;
		case 3: echo "Es el tercero"; break;
		default: echo "No es ninguno"; break;
	}

	?>