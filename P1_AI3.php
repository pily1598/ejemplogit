<a href="index.php">Inicio</a><br><br>		

	<?php

	$salto = "<hr>";

	$dia=14;
	$mes=9;
	$ano=2020;

	$nacdia=15;
	$nacmes=6;
	$nacano=1998;
	$filtro=0;

	if ($nacano <=$ano){
		$filtro= $ano - $nacano;
	} else {

	}
if ($nacmes > $mes) {
	$filtro=$filtro-1;
}elseif ($nacmes < $mes) {
		$filtro;
	}elseif ($nacmes=$mes && $nacdia>$dia) {
		$filtro=$filtro-1;
	}elseif ($nacmes=$mes && $nacdia<=$dia) {
		$filtro;
	}

	echo "Esta es tu edad:" . $filtro;
