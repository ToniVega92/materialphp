<?php 




/* Operadores de comparación 

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación 

*/

/* Operadores lógicos

&& - Evalua que se cumpla una de las dos condiciones
||, or - Que se cumpla por lo menos una de las condiciones
xor - Que se cumpla únicamente una de las condiciones, solamente una.

*/
$edad=17;

$nombre='Carlos';


if ($edad >= 18 && $nombre == 'Carlos') {
	echo '<h1> Bienvenido </h1>';
	# code...
}
if ($edad < 18 or $nombre != 'Carlos'){

echo '<h1> Eres menor de edad </h1>';

}
 ?>
