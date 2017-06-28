<?php 


function saludo(){

echo "Holaaaa usuario!!!!!";
//las funciones son como los métodos en JAVA.
}

//con parámetros

function saludousuario($nombre) {

echo '¡Bienvenido, ' . $nombre . '!';
}


function suma($numero1, $numero2){

	$resultado=$numero1+$numero2;

	echo 'Tu suma es: ' . $resultado . '<br/>';
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<h1>
	<?php 
$nombre='Juan';
saludousuario($nombre);
echo "<br/>";
suma(4,5);
	 ?>
</h1>
</body>
</html>