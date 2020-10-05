<?php

Class CalculadoraController{
    
    public $entrada;
    public $accion;
    public $resultado;
    public $pantalla;


    function __construct(){
		$this->entrada=0;
		$this->accion="";
		$this->resultado=0;
		$this->pantalla="0";
	}

	public function cachaParametros(){
		if (isset($_POST["entrada"])) {
			$this->entrada=$_POST["entrada"];
		}
		if (isset($_POST["resultado"])) {
			$this->resultado=$_POST["resultado"];
		}
		if (isset($_POST["pantalla"])) {
			$this->pantalla=$_POST["pantalla"];
		}
		if (isset($_POST["suma"])) {
			$this->accion="suma";
		}
		if (isset($_POST["resta"])) {
			$this->accion="resta";
		}
		if (isset($_POST["multiplicacion"])) {
			$this->accion="multiplicacion";
		}
		if (isset($_POST["division"])) {
			$this->accion="division";
		}
		if (isset($_POST["reset"])) {
			$this->accion="reset";
		}


	}

	public function ejecutaOperacion(){
		switch($this->accion){
			case "suma": $this->sumar(); break;
			case "resta": $this->restar(); break;
			case "multiplicacion": $this->multiplicar(); break;
			case "division": $this->dividir(); break;
			case "reset": $this->reset(); break;
			default:break;
		}
	}
	public function sumar(){
		// concatenar para la pantalla
		$this->pantalla = $this->pantalla."+".$this->entrada;
		// realizar la operacion
		$this->resultado = $this->resultado+$this->entrada;
	}
	public function restar(){
		// concatenar para la pantalla
		$this->pantalla = $this->pantalla."-".$this->entrada;
		// realizar la operacion
		$this->resultado = $this->resultado-$this->entrada;
	}
	public function multiplicar(){
		// concatenar para la pantalla
		$this->pantalla = $this->pantalla."*".$this->entrada;
		// realizar la operacion
		$this->resultado = $this->resultado*$this->entrada;
	}
	public function dividir(){
		// concatenar para la pantalla
		$this->pantalla = $this->pantalla."/".$this->entrada;
		// realizar la operacion
		$this->resultado = $this->resultado/$this->entrada;
	}
	public function reset(){
		$this->entrada=0;
		$this->accion="";
		$this->resultado=0;
		$this->pantalla="0";
	}

}
 ?>
