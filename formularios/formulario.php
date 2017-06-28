<?php 
$errores = '';
if (isset($_POST['submit'])) {

	# code...
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
}

	if (!empty($nombre)) {
		# code...
	//$nombre = trim($nombre); //quita espacios al final e inicio
	//$nombre = htmlspecialchars($nombre); //caracteres especiales a entidades en html
	//$nombre = stripslashes($nombre); //remueve simbolos para que el usuario no pueda inyectar código


						$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

						echo "Tu nombre es:  $nombre <br/>";

						} else { 
								$errores .= 'Por favor agrega un nombre <br/>'; 

								}


	if (!empty($correo)) {


							$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);


							if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){


												$errores .= 'Por favor ingresa una dirección de correo electrónico válida <br/>';

							} else 
														echo "Tu correo es:  $correo <br/>"; 


	} else { 
		
							$errores .= 'Por favor agrega un correo';
			}

 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		
	.error{ color: red; }

	</style>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		
		<input type="text" name="nombre">
		<input type="text" name="correo">

<?php if(!empty($errores)): ?> 


<div class="error"><?php echo $errores ?></div>

	<!-- lo que esté aqui dentro se va a ejecutar, pero será código html-->


<?php  endif; ?>

		<input type="submit" name='submit'>

	</form>
</body>
</html>