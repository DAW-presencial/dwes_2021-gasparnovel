<?php
/*
 * Función que retorna una referencia
 */
    // creamos un objeto
    class foo
    {
        // tiene una variable $valor
        public $valor = 42;
        // funcion que obtiene el valor para no cogerlo directamente
        public function &obtenerValor()
        {
            return $this->valor;
        }

    }
// creamosun objeto 
$obj = new foo;
// $miValor es una referencia a $obj->valor, que es 42.
$miValor = &$obj->obtenerValor(); 
// cambiamos el valor de obj
$obj->valor = 2;
// imprime el nuevo valor de $obj->valor, esto es, 2.
echo $miValor; 
