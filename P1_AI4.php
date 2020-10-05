<a href="index.php">Inicio</a><br><br>	
<?php
//----------------------------------	
echo "<br><strong>For</strong><br>";

for ($i=0; $i < 5; $i++) { 
	echo "$i <br>";
}
//----------------------------------	
echo "<br><strong>While</strong><br>";
$i=0;
while ($i <5) { 
	echo "$i <br>";
	$i++;
}
//----------------------------------	
echo "<br><strong>Do While</strong><br>";
$i=0;

do{
	echo "$i <br>";
	$i++;
}while ($i <5);

//----------------------------------	
echo "<br><strong>Funciones de arreglos</strong><br>";
	$arrNuevo=[1,2,3,4,5];
	$arrNuevo=array(1,2.235,"a",4, true);
echo "<br><strong>Agregar al final</strong><br>";
	echo var_dump($arrNuevo)."<br>";
	array_push($arrNuevo, 10);
	echo var_dump($arrNuevo)."<br>";
echo "<br><strong>Agregar al inicio</strong><br>";
	echo var_dump($arrNuevo)."<br>";
	array_unshift($arrNuevo, 20);
	echo var_dump($arrNuevo)."<br>";
echo "<br><strong>Eliminar un elemento</strong><br>";
	unset($arrNuevo[4]);
	echo var_dump($arrNuevo)."<br>";

	echo "<br><strong>Conteo de elementos</strong><br>";
	echo count($arrNuevo)."son la cantidad de elementos<br>";

//--------------------------------
	echo "<br><strong>Unir arreglos</strong><br>";

	$arr1=[1,2,3];
	$arr2=[4,5,6];

	$arrMerge=array_merge($arr1, $arr2);
	echo var_dump($arrMerge)."<br>";
	//--------------------------------
	echo "<br><strong>Unir arreglos tomando como base uno</strong><br>";

	$arr3=[1,2,3];
	$arr4=[4,5];

	$arrMerge=array_replace($arr3, $arr4);
	echo var_dump($arrMerge)."<br>";
	//--------------------------------
	echo "<br><strong>Ordenar arreglos ascendentes</strong><br>";
	sort($arrMerge);
	echo var_dump($arrMerge)."<br>";
	//--------------------------------
	echo "<br><strong>Ordenar arreglos descendentes</strong><br>";
	rsort($arrMerge);
	echo var_dump($arrMerge)."<br>";
//--------------------------------
	echo "<br><strong>Voltear un arreglo</strong><br>";
	$arr1=[1,"b",3,"a"];
	$arrAlReverso=array_reverse($arr1);
	echo var_dump($arr1)."<br>";
	echo var_dump($arrAlReverso)."<br>";
	
//--------------------------------
	echo "<br><strong>Verificar si se encuentra un elemento</strong><br>";
	$arr1=[1,"b",3,"a"];
	if (in_array(100, $arr1)) {
		echo "si esta dentro del arreglo<br>";
	}else{
		echo "no esta dentro del arreglo<br>";
	}
//--------------------------------
	echo "<br><strong>Foreach lineal</strong><br>";
	$arr1=[1,2,3,"a",34];
	foreach ($arr1 as $item) {
		echo "$item <br>";
	}
//--------------------------------
	echo "<br><strong>Un areglo dentro de otro arreglo</strong><br>";
	$arr1=[1,2,[4,5,6],"a",34];
	//echo var_dump($arr1);
	foreach ($arr1 as $item) {
		if (is_array($item)) {
			foreach ($item as $subitem) {
				echo "-$subitem <br>";
			}
			
		}else{
			echo "$item <br>";
		}
		
	}

	//--------------------------------
	echo "<br><strong>Arreglo asociativo</strong><br>";
	$arr1=["edad"=>30,"nombre"=>"Eduardo","telefono"=>477123456];
	echo var_dump($arr1)."<br>";

	echo $arr1["nombre"]."tiene".$arr1["edad"]."anos<br>";
//falta uno
	//--------------------------------
	echo "<br><strong>Arreglo asociativo</strong><br>";
	$arr1=[
			"edad" => 30,
			"telefonos"=>477123456,
			"nombre"=>"Eduardo"
		];
		echo var_dump($arr1)."<br>";
		echo $arr1["nombre"]." tiene ".$arr1["edad"]." anos <br>";
	//--------------------------------
	echo "<br><strong>Foreach asociativo</strong><br>";
	foreach ($arr1 as $key => $item) {
		echo "$key - $item<br>";
	}
?>