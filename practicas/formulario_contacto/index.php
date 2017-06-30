<?php 

$errores = '';
$enviado='';
if (isset($_POST['submit'])) { //esto quiere decir que si el usuario presiono el boton de enviar, que haga lo siguiente:...//

	# code...
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

if (!empty($nombre)) {

	# code...
	$nombre = trim($nombre);
	$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

} else {

	$errores .= 'Por favor ingresa un nombre <br/>';
}

if (!empty($correo)) {

	$correo = trim($correo);
	$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
	if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { //devuelve un false si el email no es válido, si el email es válido manda el mail por, ejemplo fulanito@gmail.com 
		$errores .= 'Por favor ingresa un correo válido <br/>';
	} 
	# code...
} else {

		$errores .= 'Por favor ingresa un correo <br/>';
	}

if (!empty($mensaje)) {
	$mensaje = htmlspecialchars($mensaje);
	$mensaje = trim($mensaje);
	$mensaje = stripcslashes($mensaje);

	# code...
} else {
	$errores .= 'Por favor ingresa el mensaje';
}

if (!$errores) {
	$enviar_a = 'tunombre@correo.com';
	$asunto = 'Correo enviado desde mi página';
	$mensaje_preparado = "De: $nombre \n";
	$mensaje_preparado .= "Correo: $correo \n";
	$mensaje_preparado .= "Mensaje" . $mensaje;

	//mail($enviar_a, $asunto, $mensaje_preparado);

	$enviado = 'true';
	# code...
}


}

require 'index.view.php';



 ?>