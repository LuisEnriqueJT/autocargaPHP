<?php
	require_once 'autoloader.php';

//	$persona = new Persona;
//	echo $persona->nombre;

//ESPACIOS DE NOMBRE Y PAQUETES
use Clases\Persona, Clases\Coche;

class Principal{
	public $persona;
	public $coche;

	public function __construct(){
		$this->persona = new Persona();
		$this->coche = new Coche();
	}
}	

$principal = new Principal();
var_dump($principal->persona);
echo "<br>";
var_dump($principal->coche);
?>