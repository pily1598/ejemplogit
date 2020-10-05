<?php

class Persona{
    
    public $nombre;
    public $edad;
    public static $mayoriaEdad = 21;

    function __construct(){
        $this->edad = 18;
    }

    public function saluda(){
        echo "Hola, mucho gusto. Mi nombre es $this->nombre<br>";
    }

    public function getSaludo(){
        return "Hola, mucho gusto. Mi nombre es $this->nombre<br>";
    }

    public function respondeSaludo($nombreInterlocutor){
        echo "Hola, mucho gusto, $nombreInterlocutor. 
         Mi nombre es $this->nombre<br>";
    }

    public function setEdad($edadInterlocutor){
        $this->edad = $edadInterlocutor + 5;
    }

    public function getEdad(){
        return $this->edad;
    }

    public static function funcionEstatica1($numero){
        echo 4 * $numero . "<br>";
    }

    public static function funcionEstatica2(){
        echo self::$mayoriaEdad . "<br>";
    }

}

?>