<!-- Ejercio 13: Opcional hacer otro ejercicio de las compras:
- Crear una función que dado una cartera y un array de productos con
(nombre y precio) devuelva un array (misma estructura) con solo los
productos que se han podido comprar. Ejemplo textual:
cartera: 7
Productos disponibles:
pan, 2
patatas, 1
cocacola,3
agua, 2
cesta: pan, patatas, cocacola
cartera: 1 -->


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

            // Agregamos todos los productos de la lista ordenados hasta que llegamos a uno que no podamos
            $cesta += ["$producto" => $precio];
        } 
    }

    var_dump($cesta);
}

compras($productos, $cartera);

?>