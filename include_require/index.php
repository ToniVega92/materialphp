<?php 

function suma($numero1, $numero2){

	return $numero1 + $numero2;
}

include 'index.view.php'; //usar include cuando el archivo no es importante (por ejemplo cuando no es una conexion con una base de datos) . Para esto se usa require. También se puede ejecutar 1 vez con include_once o require_once. Mejor usar require de forma general.



 ?>