<!-- Ejercicio 1: Crea programas de operaciones con dos variables (suma, resta, etc). -->

<?php
$num1 = 10;
$num2 = 2;

$resultSuma = $num1 + $num2;
$resultResta = $num1 - $num2;
$resultDivis = $num1 / $num2;
$resultMulti = $num1 * $num2;
$resultExp = $num1 ** $num2;
$resultRemin = $num1 % $num2;


echo 'El resultado de la suma es: '.$resultSuma . PHP_EOL;
echo 'El resultado de la resta es: '.$resultResta . PHP_EOL;
echo 'El resultado de la división es: '.$resultDivis . PHP_EOL;
echo 'El resultado de la multiplicación es: '.$resultMulti . PHP_EOL;
echo 'El resultado de la potencia es: '.$resultExp . PHP_EOL; 
echo 'El resultado del resto es: '.$resultRemin . PHP_EOL; 

?>

