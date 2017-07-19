<?php require 'header.php'; ?>


<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Título del artículo</h2>
			<p class="fecha"> 1 de Enero de 2016</p>
			<div class="thumb">
				<a href="">
					<img src=" <?php echo RUTA; ?>/images/1.png " alt="">
				</a>
			</div>
			<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ullam.</p>
			<a href="#" class="continuar">Leer más</a>
		</article>


	</div>




	<div class="post">
		<article>
			<h2 class="titulo">Título del artículo</h2>
			<p class="fecha"> 1 de Enero de 2016</p>
			<div class="thumb">
				<a href="">
					<img src=" <?php echo RUTA; ?>/images/1.png " alt="">
				</a>
			</div>
			<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ullam.</p>
			<a href="#" class="continuar">Leer más</a>
		</article>

		
	</div>



<?php require 'paginacion.php'; ?>
</div>
<?php require 'footer.php'; ?>