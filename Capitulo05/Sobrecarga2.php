<?php

class OverloadedClass {
    // __call  es lanzado al invocar un método inaccesible en un contexto de objeto
    public function __call($f, $p) {
        // condicional si no existe el metodo
        if (method_exists($this, $f . sizeof($p)))
            // llama un retono con un array de parametros
            return call_user_func_array(array($this, $f . sizeof($p)), $p);
        // function que se lanza does not exists~
        throw new Exception('Tried to call unknown method ' . get_class($this) . '::' . $f);
    }
    // funcion con dos parametros
    function Param2($a, $b) {
        echo "Param2($a,$b)\n";
    }
    // funcion con tres parametros
    function Param3($a, $b, $c) {
        echo "Param3($a,$b,$c)\n";
    }

}
    // creamos un objeto
    $o = new OverloadedClass();
    $o->Param(4, 5);
    $o->Param(4, 5, 6);

?>