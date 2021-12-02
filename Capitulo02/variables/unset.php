<?php

/*
 * unset()  de una global dentro de una función
 *
 * Si desea aplicar unset() a una variable global dentro de una función, puede usar la matriz $GLOBALS para hacerlo:
 */

function destruir_foo()
{
    global $foo;

    $foo = "Destruyendo una global dentro de una función";
    //unset($foo);  // probar también este caso
    // elimina la variable global
    unset($GLOBALS['foo']);
    // muestra la variable local
    echo $foo;
}
// muestra la variable global ya que no se ha utilizado la funcion
$foo = 'bar';
// muestra la variable global
echo $foo . '<br/>';
// funcion que destruye la varible global
destruir_foo();
// no existe la variable 
echo $foo;
