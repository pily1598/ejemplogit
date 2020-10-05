

<?php
include_once("P1_AI9_BDConfig.php");
class BDConnection{
    public $conexion;
    
    function __construct(){

        try{
            $this->conexion = new PDO(
                'mysql:dbname='. BDConfig::$BDNAME .';host='. BDConfig::$BDSERVER,
                BDConfig::$BDUSER,
                BDConfig::$BDPASSWORD

            );
        }catch(PDOException $e){

            echo "Error al conectar con la BD:" . $e->getMessage();
            exit;

        }

    }
    public function cierraConexion(){
        $this->conexion = null;
    }
}

?>