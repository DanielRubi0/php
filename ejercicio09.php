<!-- Ejercio 9: Crear una función que dado un numero imprima solo los
valores pares. -->

<?php

function even ($value) {
    
    for ($i=0; $i <= $value ; $i++) { 
        if ($i %2 === 0) {
            echo("$i ");
        }
    }
}

even(10); 
?>