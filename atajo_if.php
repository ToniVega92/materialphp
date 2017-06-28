<?php 

$edad = isset($edad) ? $edad : 'El usuario no estableció su edad';
//isset sirve para saber si una variable tiene un valor



// $edad = (condicion true/false) ? (es la pregunta de si se cumple o no) $edad (parte que se jecuta si es cierto) : (despues de los dos puntos parte que se ejecuta si no es cierto). La línea 3 de código sería lo mismo haciéndolo con if de la siguiente forma:

if(isset($edad)){

	$edad=$edad;

} else { 
		$edad= 'El usuario no estableció su edad';
} 

echo 'Edad: ' . $edad;
 ?>
