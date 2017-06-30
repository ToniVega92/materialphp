<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	
<div class="wrap">
	
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	
<input type="text" class="form-control" name="nombre" placeholder="Nombre: " value="<?php if (!$enviado && isset($nombre) ) {echo $nombre;} ?>" id="nombre">
<!-- Con la condición en el value  se comprueba si enviado es falso pero  si el nombre está seteado, por tanto si esto ocurre el nombre no se borrará-->


<input type="email" class="form-control" name="correo" placeholder="Correo: " value="<?php if (!$enviado && isset($correo)) { echo $correo;
	# code...
} ?>" id="correo">


<textarea name="mensaje" class="form-control" placeholder="Mensaje:" id="mensaje" "><?php if (!$enviado && isset($mensaje)) { echo $mensaje;} ?></textarea>

<?php if (!empty($errores)): ?>
	<div class="alert error">
		<?php echo $errores; ?>
	</div>
<?php elseif($enviado): ?>
	<div class="alert success">
		<p>Enviado correctamente</p>
	</div>

<?php endif ?>
<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Enviar Correo">
</form>

</div>
</body>
</html>