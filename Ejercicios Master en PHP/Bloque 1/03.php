<?php

/*
Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados (un número multiplicado por si mismo) de los 40 primeros números naturales.
PD: Utilizar bucle while
*/

$i = 0;

while($i <= 40){
    $cuadrado = $i*$i;
    echo "<h3>El cuadrado de $i es $cuadrado </h3>";
    $i++;
}