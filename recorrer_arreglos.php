<?php 


$meses= array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

//Recorrer los meses mediante un ciclo for

echo 'Recorrido mediante for' . '<br/>';
for ($i=0; $i < count($meses) ; $i++) {

	# code...
echo $meses[$i] . '<br/>';

}



// recorrer con while

$contador=0;
echo 'Recorrido mediante while' . '<br/>';
while ($contador< count($meses)) {
	# code...
	

	echo $meses[$contador] . '<br/>';

	$contador++;
}

 ?>