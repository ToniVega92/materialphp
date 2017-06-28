<?php 

// String: cadena de texto
$nombre="Carlos";

// Integer
$numero=7;

//Double
$numerodecimal=7.7;

// Boolean: Verdadero o Falso (true/false)

$booleano=true;

// También hay arrays, objetos, clases y nulos

//Es interesante saber que las comillas dobles "" sí permiten imprimir variables, en cambio las simples '' no, sólo imprimirán lo que se escriba, aunque se indique que es una variable mediante el símbolo del dolar $.

echo "Hola, $nombre";

//Para imprimir el contenido de la variable es necesario concatenar con el punto, como se hace aquí debajo

echo 'Hola ' . $nombre;


echo gettype($nombre);
 ?>