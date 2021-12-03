<?php

// Description of clases_compuestas

// creamos clase
class clases_compuestas {
    // argumentos
    public $anidada;
    // contructor
    function __construct(int $val) {
        $this->anidada = $val;
    }
}
// creamos clase
class clasesB {
    // argumentos
    public $a;
    // contructor
    function _construct(int $param) {
        $this->a =7;// new clases_compuestas($param);
//if (!is_null($this->a)) echo "La variable a es nula.";
    }
}

$prueba = new clasesB(7);
echo "la var vale: $prueba->a";
//var_dump($prueba);
//echo "El valor es: " . $prueba->a->anidada;