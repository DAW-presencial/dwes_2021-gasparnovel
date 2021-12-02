<?php

// funcion 
function Fibonacci($n)
{
    // declaramos dos variables
    $num1 = 0;
    $num2 = 1;
    // un contador 
    $counter = 0;
    // mientras el contador sea menor que el valor de n = 10
    while ($counter++ < $n) {
        // primera vuelta el numero es 0
        echo ' ' . $num1;
        // ahora es 0 + 1 = 1
        $num3 = $num2 + $num1;
        // ahora es 1 donde estaba 0
        $num1 = $num2;
        // ahora es 1 donde estaba 1
        $num2 = $num3;
    }
}
// declaramos n
$n = 10;
// llamamos a la funcion
Fibonacci($n);
?> 