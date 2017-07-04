<?php 


$id = $_GET['id'];


try {

$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root','');
echo "Conexión establecida" . '<br/>';

//primera forma que no se usa mucho es el metodo query, similar a mysql_connect

//$resultados = $conexion->query('select * from usuarios');


//foreach ($resultados as $key) {
	# code...

//	echo 'Nombre: ' . $key['nombre'] . '<br/>';
//	echo 'ID: ' . $key['id'] . '<br/>';
//	echo 'E-mail: ' . $key['email'] . '<br/>';
//	echo '<br/>';
//}


//Prepared Statements. Metodo que evita que el usuario pueda inyectar código

$statement = $conexion -> prepare('insert into usuarios values(null,"Jose","jose@gmail.com")');
//se prepara la consulta, y se pone un placeholder en el id, que es :id . Un place holder no es más que un valor para identificarlo
$statement -> execute( array(':id' => $id) );
//Se sustituye el valor incial del placeholder por la variable obtenida por el metodo get.

$resultados = $statement-> fetch();

print_r($resultados);


} catch(PDOException $e){


echo "Error" . $e->getMessage();


}

 ?>