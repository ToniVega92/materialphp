<?php 

$conexion = mysql_connect('localhost', 'root','') or die(); //conectarse a una base de datos
mysql_select_db('prueba_consola', $conexion);



$resultados = mysql_query('select * from usuarios');



// ---------------------------------

//$fila = mysql_fetch_object($resultados);

//echo $fila->email;

while ($fila = mysql_fetch_object($resultados)) {
	# La condicion del while quiere decir: mientras haya filas haz lo siguiente:
	# mysql_fetch_object accede al primero y luego ya salta al segundo, tercero, cuarto...

echo 'El correo de ' . $fila -> nombre . ' es ' . $fila -> email;
echo '<br/>';



}



 ?>