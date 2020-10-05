

<?php

//Declaración de la función
function imprimirTitulo(){
    echo "<br><strong>Título 1</strong><br>";
}


//No se puede establecer dos funciones con el mismo nombre
//------------
function imprimirPasandoParametro($titulo){
    echo "<br><strong>$titulo</strong><br>";
}


//------------
function imprimirPasandoDefault($titulo = "Sin titulo"){
    echo "<br><strong>$titulo</strong><br>";
}

//-------

function getTitulo($titulo){
    return "<br><strong>$titulo</strong><br>";
}

//-------

function getTituloImprimiendo($titulo){
    echo "<br><strong>$titulo (Impreso desde función )</strong><br>";
    return "<br><strong>$titulo (Impreso desde Variable) </strong><br>";
}

//-------------
function sumaUno($numero){
    $numero++;
    echo "<br>$numero<br>";
}

//-------------
function sumaUno1(&$numero){
    $numero++;

}


?>