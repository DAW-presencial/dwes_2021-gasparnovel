<?php 
// funcion que se le pasa un argumento por defecto
    function factorial($n)
    {   // si el factorial s 1 devuelve 1
        if ($n == 1) {
            return 1;
        } else {
            // 3 multiplicado por 3 -1 = 2
            return $n * factorial($n - 1);
        }
    }
    echo "El factorial de 3 es: " . factorial(3);
?>