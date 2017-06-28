<?php 


$meses= array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

$alehandro = array('telefono' => 6657658 ,'edad' => 20, 'pais'=> 'mexico');


 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1>Datos</h1>
 	<ul>
 		
<?php 
foreach ($alehandro as $key => $value) {
	
// $key representa al nombre de la variable asociativa, como es telefono, edad, pais y $value a lo que está dentro de esa  variable

//haciendo lo siguiente concatenamos el nombre de la variable asociativa y su valor, dando salida por pantalla
echo '<li>' . $key . ' : ' . $value . '</li>';
	# code...
}
 ?>

 	</ul>
 </body>
 </html>