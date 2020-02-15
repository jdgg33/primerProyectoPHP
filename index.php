<?php

//esto es un comentario de una linea, sirve de ayuda al momento de programar.

/*esto es un comentario de varias lineas,
sirve de ayuda para programar*/

// variables
/* las variables almacenan datos en la memoria que se van a necesitar despues,
las variables se declaran con el signo $ al comienzo y luego el nombre de la variable,
este no puede empezar con numero o caracteres alfanumericos.
el valor de las variables, si es un texto, debe ir dentro de "comillas", 
si es un numero se escribe normalmente, 
al terminar de declarar la variable, debo terminar con ; */

$nombre="Juan david";

/*para imprimir la variable en el navegador
Para verificar y tener control del proceso que estamos codificando php nos ofrece varias alternativas
para imprimir en pantalla dichos valores, esto utilizando las funciones print y echo*/

echo($nombre);

$edad=38;
echo(" ".$edad);

$estatura=1.68;
$nombre=" david ";
echo($nombre);

echo("Hola Mundo ");
print("<br>"); //salto de linea
echo("Mi nombre es ".$nombre."tengo ".$edad." años de edad"); //para concatenar se usa el punto .

?>