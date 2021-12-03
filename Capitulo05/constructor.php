<?php

// clase
class Abuelo {
    // function
    function Abuelo() {
        echo "hola mundo";
    }
    // constructor
    function __construct() {
        echo "<br/>Instanciando abuelo";
    }
}
// extiende de abuelo
class Padre extends Abuelo {
    // constructor
    function __construct() {
        echo "<br/>Instanciando padre";
    }
    // funcion
    function Padre() {
        echo "<br/>Iniciando padre";
    }
}
// extiende de padre
class Hijo extends Padre {
    // constructor que se hereda de padre
    function __construct() {
        parent::__construct();
    }
}
// clase
class MiClase {
    // argumentos
    public $color;
    // constructor
    function __construct($c = 'verde') {
        $this->color = $c;
        echo "<br/>El objeto Miclase se ha creado e iniciado con color $this->color";
    }
}

// nuevo objetos
$padre = new Padre();
$hijo = new Hijo();
$o = new MiClase();
// llamamos a la funcion de MiClase
echo "<br/>El color es " . $o->color;
// metemos un argumento
$hijo->padre=$padre;
// llamamos a la funcion de padre
$hijo->padre->Padre();
// vemos que contiene la variable
var_dump($hijo);
?>