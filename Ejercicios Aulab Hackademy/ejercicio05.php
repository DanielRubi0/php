<!-- Ejercio 5: Crear un programa que sume los primeros 10 números. -->

<?php
$resultado = 0;
for ($i=1; $i <= 10; $i++) { 
    echo ("$i + $resultado = ");
    $resultado += $i;
    echo($resultado).PHP_EOL;
};
?>