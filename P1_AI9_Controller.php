

<?php

//include_once("P1_AI9_BDConnection.php");
include_once("P1_AI9_BD_Usuario.php");
//$localConexion = new BDConnection;

//$mUsuario = new Usuario();
//$mUsuario->nombre = "Alejandro";
//$mUsuario->edad = 21;
//$mUsuario->save();

//
$mUsuarioCargado = Usuario::buscaUsuario(5); //Con esta función vas a mandar a llamar a un dato en específico dentro de la base de datos de la tabla usuario
//echo var_dump($mUsuarioCargado);

//Eliminar un Registro
//if(isset($mUsuarioCargado)){ //Aquí se va a eliminar el dato que seleccionaste anteriormente
//    $mUsuarioCargado->delete();
//}

//Actualización de Información
//if(isset($mUsuarioCargado)){ //Aquí se va a eliminar el dato que seleccionaste anteriormente
//    $mUsuarioCargado->nombre = "Pancha";
//    $mUsuarioCargado->edad = 51;
//    $mUsuarioCargado->save();
//}
//echo var_dump($mUsuarioCargado);


$mUsuarios = Usuario::all();
//echo var_dump($mUsuario);

?>