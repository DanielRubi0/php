<!-- Ejercio 7: Encapsular en funciones los ejercicios 5 y 6. -->


<!-- Ejercicio 5 -->
<?php
function suma ($value){
    $resultado = 0;
    for ($i=1; $i <= $value; $i++) { 
        echo ("$i + $resultado = ");
        $resultado += $i;
        echo($resultado).PHP_EOL;
    };
};

suma(10)
?>


<!-- Ejercicio 6 -->
<?php

function random ($value) {
    for ($i=0; $i < $value; $i++) { 
        $arr = [];
        $arr = random_int(1, 100);
        echo("$arr  ");
    }
}

random(5)
?>