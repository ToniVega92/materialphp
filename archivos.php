<?php 


//$resultado = file_exists('documento.txt');
//var_dump($resultado);


//echo file_get_contents('documento.txt');
//echo file_put_contents('documento.txt', "Hola Toni \n", FILE_APPEND);


//file_put_contents('documento.txt', '');

//for ($i=0; $i < 10 ; $i++) { 
//	file_put_contents('documento.txt', "$i \n", FILE_APPEND);
//}

$archivo = file('documento.txt');

print_r($archivo);


 ?>