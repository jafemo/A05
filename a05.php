<?php
//Clase para añadir información de una personas a un departamento

class persona{

	public $nombre = 'Javi';
	public $apellido = 'Montañez';
	public $edad = 20;
	public $dni = '21011667V';


/////////////////FUNCTION CONTRUCT PARA AYUDAR A LA CREACIÓN DE LOS OBJETOS/////////////////

/*function __construct($nombre, $apellido, $edad, $dni){
	$this->nombre = $nombre;
	$this->apellido = $apellido;
	$this->edad = $edad;
	$this->dni = $dni;
}
*/

/////////////////CREACION DE TODOS LOS GETERS DE LA CLASE/////////////////

public function getNombre(){
	echo $this->nombre;
	return $this->nombre;
}

public function getApellido(){
	echo $this->apellido;
	return $this->apellido;
}

public function getEdad(){
	echo $this->edad;
	return $this->edad;
}

public function getDni(){
	echo $this->dni;
	return $this->dni;
}


/////////////////A CONTINUACION VAMOS A CREAR LOS SETTERS/////////////////

public function setNombre($nombre){
	$this->nombre = $nombre;
}

public function setApellido($apellido){
	$this->apellido = $apellido;
}

public function setEdad($edad){
	$this->edad = $edad;
}

public function setDni($dni){
	$this->dni = $edad;
}
/*
/////////////////A CONTINUACION CREAMOS UNA PEQUEÑA FUNCION PARA DEVOLVER LA INFORMACION/////////////////

public function generarInformacion(){
	$informacion="<br>Nombre: " . $this->$nombre . 
				"<br>Apellido: " . $this->$apellido . 
				"<br>Edad: " . $this->$edad . 
				"<br>DNI: " . $this->$dni;
				return $informacion;
}
*/
}

?>
