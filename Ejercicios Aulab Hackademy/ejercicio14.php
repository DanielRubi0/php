<!-- Ejercio 14: Modificar la función anterior para que pueda comprar todos los
productos posibles.
......
cartera: 0-->

<?php

$cartera = 5;

$productos = [
        'pan' => 2,
        'patatas' => 1,
        'leche' => 4,
        'cocacola' => 3,
        'agua' => 2
    ];


function compras($productos, $cartera){

    $cesta = [];

    foreach ($productos as $producto => $precio){


        // Si nuestra cartera es igual al valor de los productos sigue el ciclo.
        if ($cartera >= $productos[$producto]) {

            // Si tenemos saldo en la cartera, le restamos el valor de cada producto.
            $cartera -= $productos[$producto];

            // Agregamos todos los productos que nuestro saldo antes de llegar a cero pueda comprar.
            $cesta += ["$producto" => $precio];
        } 
        // Si no podemos comprar un producto prueba con el siguiente del array
        else {
            $productos[$producto]++;
        }
    }

    var_dump($cesta);
}

compras($productos, $cartera);

?>