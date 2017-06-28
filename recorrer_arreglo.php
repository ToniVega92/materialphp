<?php 

$meses= array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');



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

foreach ($meses as $mes) {
	//Para recorrer una lista, se pone la variable principal y una de recorrido, en este caso, $mes. Al recorrer podemos imprimirla directamente.
	echo '<li>' . $mes . '</li>';

	# Ejercuta algo
}

 ?>

</ul>


</body>
</html>