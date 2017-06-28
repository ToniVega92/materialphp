<?php 

if ($_POST) {
	# code...
 echo($_POST['nombre']);


}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formulario">  <!-- Para datos sensible, se utiliza el metodo post, por seguridad, y además también se añade htmlspecialchars. El php insertado en action es una redirección al mismo documento desde una variable superglobal-->
		
<input type="text" placeholder="Nombre" name="nombre">
<br/>
<label for="hombre">Hombre</label>
<input type="radio" name="sexo" id="" value="hombre">
<br/>
<label for="mujer">Mujer</label>
<input type="radio" name="sexo" id="" value="mujer">

<br/>

<select name="year" id="year">
	
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
</select>
<br/>
<label for="terminos">¿Aceptas los términos?</label>
<input type="checkbox" name="terminos" id="terminos" value="true">
<br/>
<input type="submit" value="Enviar">

	</form>
</body>
</html>