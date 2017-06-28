<?php  
$numero=10;
$numero2=5;

$resultado=$numero+$numero2;

//echo $resultado;
/*
=== Significa idéntico. Sirve para enteros que se han puesto entre comillas, sirve para comparar diferentes tipos de datos, por ejemplo '10' (string) NO es idéntico a 10 (integer) porque son diferentes tipos de dato.
!==



++$variable/$variable++ se usa para incremetar de uno en uno
--$variable/$variable-- se usa para disminuir de uno en uno

*/



$texto= 'Cadena de texto';
$texto2='Segunda cadena de texto';

$texto3= $texto . " " . $texto2;



$texto3 .= ' He añadido algo mas';
echo $texto3;
?>

