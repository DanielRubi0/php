<!-- Ejercio 8: Crear una función que imprima X valores random en el
intervalo 0 - X. -->

<?php

function random ($value) {

    for ($i=0; $i < $value; $i++) { 
        $arr = [];
        $arr = random_int(0, $value);
        echo("$arr  ");
    }
}

random(5); 
?>