<?php
/*
include 'a05.php'


$nuevaPersona = new persona("Javi", "Montañez", 20, "21011667V");
$nuevaPersona2 = new persona("Roberto", "Feo", 20, "222222222F");

$personas  = array($nuevaPersona, $nuevaPersona2);
echo $personas;
*/

include 'a05.php';

$nuevaPersona = new persona();
$nuevaPersona->getNombre();


echo $nuevaPersona;

?>