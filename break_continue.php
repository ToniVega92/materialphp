<?php 

$paises= array('Mexico','España','Argentina');



//foreach ($paises as $key) {
//	# code...
//echo $key . '<br/>';

//if ($key == 'España'){
//	break; //el break rompe el bucle o ciclo si se cumple el if
//}

//}
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1>Paises Latinoamericanos</h1>

 	<ul>
 		
<?php 

foreach ($paises as $key) {
	# code...

	if ($key == 'España') {
		continue; //se salta un ciclo, y no ejecuta lo que está DEBAJO, IMPORTANTE...
		# code...
	}
	echo $key .'<br/>';

}

 ?>

 	</ul>
 </body>
 </html>