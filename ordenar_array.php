<?php 

$meses= array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');


sort($meses); //ordenación clásica de array

rsort($meses); //ordenación al revés

$numeros= array(1,2,3,4,5,6,7,8,9,10,1000,2000,23423,543);
rsort($numeros);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del año</title>
</head>
<body>
	<h1>Meses del año</h1>
<ul>
	
<?php 

foreach ($numeros as $numero) {
	//Para recorrer una lista, se pone la variable principal y una de recorrido, en este caso, $mes. Al recorrer podemos imprimirla directamente.
	echo '<li>' . $numero . '</li>';

	# Ejercuta algo
}

 ?>

</ul>


</body>
</html>