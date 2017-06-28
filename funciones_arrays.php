<?php 

$amigo = array('telefono' => 65464564,'edad' => 25,'pais'=>'mexico');
extract($amigo);

//la funcion extract hace que las asignaciones de los arreglos asociativos se puedan utilizar como variables, por ejemplo, telefono la estamos pasando por pantalla como una variable, y nos devuelve el número asignado
echo $telefono;




$semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado','Domingo');

$ultimodia=array_pop($semana); //extrae el ultimo, lo retira del array y podemos eliminarlo sin guardarlo en ninguna variable o guardarlo como en este caso en $ultimodia


foreach ($semana as $key) {
	# code...
	echo $key . '<br/>';
}




echo join('-',$semana); //muestra los datos de un array separados por lo que le hayamos introducido en primer lugar, en este caso '-'.




count($semana); //cuenta los elementos de un array
sort($semana); //ordena por orden alfabetico si es un array
rsort($semana); //ordena al reves

array_reverse($semana); //muestra el array al reves NO ORDENA.






 ?>