<!-- Ejercio 11: Considerando las funciones de antes (pares e impares), crear
una función que tenga como limite un numero dado n y como
segundo parámetro un valor booleano que: si es true imprime
los pares y si es false imprime los impares. -->

<?php

function evenOdd ($value, $boolean) {

    if ($boolean === True) {
        for ($i=0; $i <= $value; $i++) { 
            if ($i %2 === 0) {
                echo("$i ");
            }
        }
    }

    if($boolean === False) {
        for ($i=0; $i < $value; $i++) { 
            if ($i %2 !== 0) {
                echo("$i ");
            }
        }
    }
}

evenOdd(10, True)
?>