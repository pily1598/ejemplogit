<a href="index.php">Inicio</a><br><br>	
<?php

echo "<br><strong>Examen</strong><br>";

for($i=5;$i>=1;$i--)
{
for($j=1;$j<=6-$i;$j++)
{

		echo $j . "-";
	
}
echo "<br>";
}


//-------------------------------
echo "<br><strong>Ejercicio 2</strong><br>";
for($i=1;$i<=5;$i++)
{
for($j=1;$j<=6-$i;$j++)
{
echo $j . "-";
}
echo "<br>";
}


//-------------------------------
echo "<br><strong>Ejercicio 3</strong><br>";


$Mes1=31;
$Mes2=28;
$Mes3=31;
$Mes4=30;
$Mes5=31;
$Mes6=30;
$Mes7=31;
$Mes8=31;
$Mes9=30;
$Mes10=31;
$Mes11=31;
$Mes12=31;
echo "En: ";
for ($i=1; $i <= $Mes1 ; $i++) 
	{echo "$i -";}
echo "<br>";

echo "Feb: ";
for ($i=1; $i <= $Mes2 ; $i++)  
	{echo "$i -";}
echo "<br>";

echo "Mar: ";
for ($i=1; $i <= $Mes3 ; $i++) 
	{echo "$i -";}
echo "<br>";

echo "Abr: ";
for ($i=1; $i <= $Mes4 ; $i++)
 { echo "$i -";}
echo "<br>";

echo "May: ";
for ($i=1; $i <= $Mes5 ; $i++) 
	{ echo "$i -";}
echo "<br>";

echo "Jun: ";
for ($i=1; $i <= $Mes6 ; $i++)
 { echo "$i -";}
echo "<br>";

echo "Jul: ";
for ($i=1; $i <= $Mes7 ; $i++) 
	{ echo "$i -";}
echo "<br>";

echo "Ag: ";
for ($i=1; $i <= $Mes8 ; $i++)
 { echo "$i -";}
echo "<br>";

echo "Sept: ";
for ($i=1; $i <= $Mes9 ; $i++) 
	{ echo "$i -";}
echo "<br>";

echo "Oct: ";
for ($i=1; $i <= $Mes10 ; $i++) 
	{ echo "$i -";}
echo "<br>";

echo "Nov: ";
for ($i=1; $i <= $Mes11 ; $i++) 
	{ echo "$i -";}
echo "<br>";

echo "Dic: ";
for ($i=1; $i <= $Mes12 ; $i++) 
	{ echo "$i -";}
echo "<br>";


