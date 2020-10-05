<a href="index.php">Inicio</a><br>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> P1_AI9 Conexion base de datos</title>
</head>

<?php

include_once("P1_AI9_Functions.php");

titulo("BD");

include_once("P1_AI9_Controller.php");



?>

<table border="1">
	<thead>
		<tr>
			<th>Id</th>
        <th>Nombre</th>
        <th>Edad</th>
    </tr>
</thead>
<tbody>
	<?php
		foreach ($mUsuarios as $mUsuario) {
			echo "<tr>
					<td>$mUsuario->id</td>
					<td>$mUsuario->nombre</td>
					<td>$mUsuario->edad</td>
				</tr>";
		}
	?>
	
</tbody>
</table>