<?php 


//print_r($_POST); post recoje todos los datos del formulario
//if ($_POST){   //comprobamos si post tiene datos
//$nombre = $_POST['nombre'];
//$sexo = $_POST['sexo'];
//$year = $_POST['year'];
//$terminos = $_POST['terminos'];
//
//echo 'Hola ' . $nombre . ' eres ' . $sexo;
//} else { 

//header (); //si no tiene datos header nos redirige a donde le indiquemos mediante el location y la dirección que queramos
//}
 //

if (!$_GET) {
	# code...
	header('Location: http://localhost/CursoPHP/formularios/');
} else {
$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];


echo $nombre . '<br/>';
echo $sexo . '<br/>';
echo $year . '<br/>';
echo $terminos . '<br/>';
}


?>
