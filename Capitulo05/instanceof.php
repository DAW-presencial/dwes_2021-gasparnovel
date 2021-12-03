<?php

/* 
 * demostación de instanceof y get_class()
 */

 // creamos clases y extendemos de ellas
class Abuelo{}
class Padre extends Abuelo{}
class HijoA extends Padre{}
class HijoB extends Padre{}
// creamos el objeto
$hb= new HijoB;
// preguntamos si esta instanciado en... y nos devuelve booleano
echo "<br />Es hijo B instancia de Padre? " . ($hb instanceof Padre ? 'cierto': 'falso');
echo "<br />Es hijo B instancia de Abuelo? " . ($hb instanceof Abuelo ? 'cierto': 'falso');
echo "<br />Es hijo B instancia de HijoA? " . ($hb instanceof HijoA ? 'cierto': 'falso');
echo "<br />Es hijo B instancia de HijoB? " . ($hb instanceof HijoB ? 'cierto': 'falso');
echo "<br />Hijo B pertenece a la clase " . get_class($hb);

// clase abstract
abstract class bar {
    public function __construct()
    {   // devuelve foo 
        var_dump(get_class($this));
        // devuelve el nombre de la clase ene ste caso bar ya que no lñe pasamos un parametro
        var_dump(get_class());
    }
}

class foo extends bar {
}

$a = new foo;
?>