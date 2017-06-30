<?php 

if (isset($_COOKIE['font-size'])) {

	$tamano = $_COOKIE['font-size'];
	# code...
} else {


	$tamano= '15px';
}







 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		

p {font-size: <?php echo $tamano; ?>;}

	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio numquam sed saepe consequuntur, commodi incidunt tempore atque fugit vero! Modi eos nesciunt dolore, reiciendis consectetur eius deserunt quia impedit laboriosam.</p>
</body>
</html>