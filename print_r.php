<?php 

$texto= 'Carlos';
$paises= array('Mexico','España','Argentina');
$num=1245;
$arregloasociativo = array('Nombre' =>'Pedro' ,'Edad' => 32);
$booleano=false;

//solo muestra lo que es legible para los seres humanos, no da tanta información como var_dump, por tanto no sabremos el tipo de dato con el que tratamos al imprimir

print_r($texto);
print_r($paises); //los arreglos se ven bastante claros. Para trabajar de una manera mas rapida print_r es mas eficaz

print_r($arregloasociativo);


//para booleanos es mejor usar var_dump



 ?>