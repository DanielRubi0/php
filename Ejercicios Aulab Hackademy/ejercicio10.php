<!-- Ejercio 10: Crear una función que dado un número x imprima solo los
valores impares. -->

<?php

function odd ($value) {

    for ($i=0; $i <= $value ; $i++) { 
        if ($i %2 !== 0) {
            echo("$i ");
        }
    }
}

odd(10); 
?>