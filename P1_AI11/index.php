<a href="../index.php">Inicio</a><br>
<br><br> <?php

//Obtener los parámetros
//Conocer qué operación se va a realizar
//Realizar la operación (obtener el resultado) (Resultado)
//Imprimir en pantalla (Cadena Pantalla)

include("Controllers/CalculadoraController.php");
$calculadora = new CalculadoraController();
$calculadora->cachaParametros();
$calculadora->ejecutaOperacion();


?>

<form method="post">
<label> <?php echo $calculadora->pantalla?> = <?php echo $calculadora->resultado?></label><br>
<input type="number" name="entrada" value="" required>
<input type="hidden" name="resultado" value="<?=$calculadora->resultado?>">
<input type="hidden" name="pantalla" value="<?=$calculadora->pantalla?>">
    <button name="suma">+</button>
    <button name="resta">-</button>
    <button name="multiplicacion">*</button>
    <button name="división">/</button>

</form>
<form>
    <button name="reset">Reset</button>
</form>