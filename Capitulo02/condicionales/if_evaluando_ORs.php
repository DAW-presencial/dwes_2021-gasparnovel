<?php

/*
 * Varias evaluaciones encadenadas por OR
 * 
 * Ejemplo que demuestra que en cuanto una de las condiciones se cumple, no se 
 * comprueban las demás es decir en cuanto encuentra un true se para de mostrar el echo.
 * 
 */

if (condicion1() || condicion2() || condicion3()) {
    echo "Entrando en el condicional <br/>";
}

function condicion1(){
    echo "Ejecutando condicion 1<br/>";
    return false;
}

function condicion2(){
    echo "Ejecutando condicion 2<br/>";
    return true;
}

function condicion3(){
    echo "Ejecutando condicion 3<br/>";
    return true;
}
?>