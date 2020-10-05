

<?php

include_once("P1_AI9_BDConnection.php");

class Usuario {
    public $id;
    public $nombre;
    public $edad;
    public function save(){
        try{
            $dbConnection = new BDConnection();

            if( $this->id ){ //Si ya tiene un id, será una actualización
            $sql = "UPDATE usuario SET nombre = :nombre, edad = :edad WHERE id = :id";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR );
            $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
            $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
            $statement->execute();
            $this->id = intval($dbConnection->conexion->lastInsertId());
            
            }else{
            $sql = "INSERT INTO usuario (nombre, edad) VALUES (:nombre, :edad) ";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR );
            $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
            $statement->execute();
            $this->id = intval($dbConnection->conexion->lastInsertId());
                
            }
            $dbConnection->cierraConexion();
        }catch(PDOExeption $e){
            echo "Error al guardar : " . $e->getMessage();
            exit;
        }
    }

    public static function buscaUsuario($id){
        try{
            $dbConnection = new BDConnection();
            $sql = "SELECT * FROM usuario WHERE id = :id";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            //Opción 1
            //$mUsuario = $statement->fetchObject("Usuario");
            //Opción 2
            $rows = $statement->fetchAll();
            $mUsuario = null;
            foreach( $rows as $row){
                $mUsuario = new Usuario ();
                $mUsuario->id = intval( $row["id"] );
                $mUsuario->nombre = $row["nombre"];
                $mUsuario->edad = intval( $row["edad"] );
            }
            $dbConnection->cierraConexion();
            return $mUsuario;
        }catch(PDOException $e){
            echo "Error al consultar: " . $e->getMessage();
            exit;
        }
    }

    public function delete(){
        try{
            $dbConnection = new BDConnection();
            $sql = "DELETE FROM usuario WHERE id = :id";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
            $statement->execute();
            $this->id = intval($dbConnection->conexion->lastInsertId());
            $dbConnection->cierraConexion();
        }catch(PDOExeption $e){
            echo "Error al Eliminar : " . $e->getMessage();
            exit;
        }
    }

    public static function all(){
		try{
			$dbConnection= new BDConnection();
			$sql="SELECT * FROM usuario";
			$statement=$dbConnection->conexion->prepare($sql);
			$statement->execute();
			// opcion 1
			//$mUsuario=$statement->fetchObject("Usuario"); 
			// opcion 2
			$rows=$statement->fetchAll();
			$mUsuarios=[];
			foreach ($rows as $row) {
				$mUsuario=new Usuario();
				$mUsuario->id=intval($row["id"]);
				$mUsuario->nombre=$row["nombre"];
				$mUsuario->edad=intval($row["edad"]);
				array_push($mUsuarios, $mUsuario);
			}
			

			$dbConnection->cierraConexion();
			return $mUsuarios;
		}catch(PDOException $e){
			echo "Error al consultar: " . $e->getMessage();
			exit;
		}
	}



}

?>