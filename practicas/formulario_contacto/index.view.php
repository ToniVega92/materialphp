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
	
<input type="text" class="form-control" name="nombre" placeholder="Nombre: " value="" id="nombre">


<input type="email" class="form-control" name="correo" placeholder="Correo: " value="" id="correo">


<textarea name="mensaje" class="form-control" placeholder="Mensaje:" id="mensaje"></textarea>

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