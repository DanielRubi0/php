<!-- Ejercio 3: Crear un array de arrays e imprimir un elemento del array -->

<?php
$users = [
    [
    "nombre" => "Dani", 
    "apellido" => "Rubio", 
    "hobbies" => ["Videojuegos", "Programación", "Hacer deporte"]
    ],
    [
    "nombre" => "Alba", 
    "apellido" => "del Campo", 
    "hobbies" => ["Leer", "ir al cine", "Hacer deporte"]
    ],
];
echo $users[1]['hobbies'][0];
?>
