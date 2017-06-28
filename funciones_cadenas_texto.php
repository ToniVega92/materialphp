<?php 

$texto='<> & "" ';
echo htmlspecialchars($texto); //permite convertir caracteres especiales en entidades html

echo trim(' weeee   '); //elimina los espacios en blanco al final y al inicio

echo strlen('Holaa'); //cuenta los caracteres de una cadena de texto

echo substr('Holaaaa', 1,3);   //muestra un pedazo de un string, primero va el string, luego el numero por el que empieza y el ultimo cuantos quieres mostrar.

echo strtoupper('que pachaaaa'); // pone en mayuscula

echo strtolower('MAAAAAAEEE MIAAAAAA'); // pone en minuscula

echo strpos('haaaaaaafwfa', 'w'); //busca la letra de la derecha en el texto de la izquierda, que puede ser perfectamente una variable devolviendo la posición en la que se encuentra la letra.




 ?>