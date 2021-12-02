<?php

// Versión recursiva de la función de fibonacci 

function fibonacci(int $n) {
    // si n es es 0 o 1 devuelve 0 o 1
    if ($n === 1 || $n === 0) 
    {
        return $n;
    } 
    // si no es 0 o 1 
    else 
    {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}
// llama la funcion
echo fibonacci("3");