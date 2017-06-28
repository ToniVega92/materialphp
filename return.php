<?php 


function suma($numero1, $numero2){

	$resultado=$numero1+$numero2;

	return $resultado;
}

$resultado=suma(10,15);
echo $resultado;
//Es importante que las funciones no hagan echos de las variables, sino que las retorne.
 ?>