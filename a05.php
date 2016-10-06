<?php
//Clase para añadir información de una personas a un departamento

class persona{

	public $nombre;
	public $apellido;
	public $edad;
	public $dni;


/////////////////FUNCTION CONTRUCT PARA AYUDAR A LA CREACIÓN DE LOS OBJETOS/////////////////

function construct($nombre, $apellido, $edad, $dni){
	$this->nombre = $nombre;
	$this->apellido = $apellido;
	$this->edad = $edad;
	$this->dni = $dni;
}


/////////////////CREACION DE TODOS LOS GETERS DE LA CLASE/////////////////

public function getNombre(){
	return $this->nombre;
}

public function getApellido(){
	return $this->apellido;
}

public function getEdad(){
	return $this->edad;
}

public function getDni(){
	return $this->dni;
}


/////////////////A CONTINUACION VAMOS A CREAR LOS SETTERS/////////////////

public function setNombre($nombre){
	$this->nombre;
}

public function setApellido($apellido){
	$this->apellido;
}

public function setEdad($edad){
	$this->edad;
}

public function setDni($dni){
	$this->dni;
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