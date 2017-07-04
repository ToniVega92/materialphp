<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paginacion</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
<div class="contenedor">
	
<h1> Artículos </h1>
<section class="articulos">
	
<ul>
	<?php foreach ($articulos as $articulo): ?>
	 	<li><?php echo $articulo['idpag'] . '.- ' . $articulo['texto'];?></li>
	 <?php endforeach ?> 
</ul>

</section>








<section class="paginacion">
	
<ul>
	<?php if ($pagina == 1): ?>
		
		<li class="disabled">&laquo;</li>
	<?php else: ?>
		<li ><a href="?pagina=<?php echo $pagina -1; ?>">&laquo;</a></li>
	
	<?php endif ?>






<?php 

for ($i=1; $i <= $numeropaginas ; $i++) { 
	# code...
if ($pagina == $i) {
	# code...
	echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
} else { echo "<li><a href='?pagina=$i'>$i</a></li>";
}
	
}


 ?>



 
<?php if ($pagina == $numeropaginas): ?>
		
		<li class="disabled">&raquo;</li>
	<?php else: ?>
		<li ><a href="?pagina=<?php echo $pagina + 1; ?>">&raquo;</a></li>
	
	<?php endif ?>

	


</ul>


</section>

</div>


</body>
</html>




	