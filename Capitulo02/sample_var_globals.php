<?php
// funcion por parametro que almacena valor en la vairable global probando 
function variable_global($temp){
    global $probando;
    $probando= $temp;
}
// metemos valor en la vaiable 
variable_global("hola mundo cruel");
// mostramos el valor 
echo $probando;
// mostramos todas las variables globales
var_dump($GLOBALS);
?>