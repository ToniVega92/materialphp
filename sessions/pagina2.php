<?php 

session_start();



if ($_SESSION) {
	# code...
$nombre = $_SESSION['nombre'];
echo "<h1> Hola, $nombre </h1>";


} else {

	echo "No has iniciado sesión";
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina 2</title>
</head>
<body>

	<a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>

