<?php 

//así se define un array de forma clásica
$semana= array('Lunes','Martes','Miércoles','Jueves','Viernes','Sabado','Domingo');

//esta segunda manera es más nueva y parecida a JavaScript. Depende de la versión de PHP que tengas podrás usarla o no
$arreglonuevo = ['Lunes','Martes','Miércoles','Jueves','Viernes','Sabado','Domingo'];
//aqui accedemos e imprimimos a la posición 1, es decir, al martes puesto que 0 es Lunes.


//en los arreglos se puede almacenar todo tipo de valores vistos anteriormente
$otroarreglo=array('cadena de texto', 1, array('asd',123), true);

//definir un valor más en el array, hacerlo crecer, esto es interesante puesto que en java no se si puede hacer exactamente así, incluso puedes poner posiciones saltándolas, por ejemplo, en este caso podría definir la posición 10 e imprimirla y no pasaría nada.
 $semana[10]='Ponpu';

// echo $semana[10];


//Imprimir los arreglos de forma primitiva posición por posición. El punto "." concatena y con una etiqueta br el navegador lo interpretará como un salto de línea en html.
 echo $semana[0] . '<br/>';
 echo $semana[1] . '<br/>';
 echo $semana[2] . '<br/>';
 echo $semana[3] . '<br/>';
 echo $semana[4] . '<br/>';
 echo $semana[5] . '<br/>';
 echo $semana[6] . '<br/>';



 ?>