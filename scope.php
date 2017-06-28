<?php 	

$numero = 7;
function mostrarNumero ($numero){   //esta función no puede acceder a las variables que están fuera de la función si no se las pasamos por parámetro

	echo $numero;    
}

mostrarNumero($numero);



 ?>