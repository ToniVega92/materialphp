<?php 


function contar (){

$archivo = 'contador.txt';

if (file_exists($archivo)) {

$cuenta = file_get_contents($archivo) +1;
file_put_contents($archivo, $cuenta);


return $cuenta;



} else {

file_put_contents($archivo, 1);

return 1;

}


}


//echo contar();



 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Contador de visitas</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
 	<h1>Contador de Visitas</h1>
 	<div class="visitantes">
 	<p class="numero"><?php echo contar(); ?></p>
 	<p class="texto">Visitas</p>
 	</div>
 </body>
 </html>