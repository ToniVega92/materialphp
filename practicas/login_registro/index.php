<?php 

session_start();
if (isset($_SESSION['usuario'])) {
	header('Location: contenido.php');
	# code...
} else header('Location: registrate.php');


 ?>