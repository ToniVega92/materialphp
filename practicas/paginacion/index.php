<?php 

try {



$conexion=new PDO('mysql:host=localhost;dbname=paginacion', 'root','');





}catch(PDOException $e){

	echo "ERROR: " . $e->getMessage();
}




$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postporpagina = 3;


$inicio = ($pagina > 1) ? ($pagina * $postporpagina - $postporpagina) : 0;

$articulos = $conexion -> prepare("
	select SQL_CALC_FOUND_ROWS * from articulos
	 limit $inicio, $postporpagina
	 ");

$articulos->execute();
$articulos=$articulos->fetchALL();


if (!$articulos) {
	header('Location: index.php');
	# code...
}

$totalarticulos= $conexion->query('select found_rows() as total');
$totalarticulos = $totalarticulos->fetch()['total'];



$numeropaginas=ceil($totalarticulos / $postporpagina);
echo $numeropaginas;
require 'index.view.php';
 ?>