<?php
// creamos la clase padre
class Abuelo{
    // variables
    protected $nombre;
    private $edad;
    // constructor
    public function __construct( $nombre)
    {
        $this -> nombre = $nombre;
    }
    // getter y setter
    public function __get($propiedad){
        if(property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    public function __set($propiedad, $valor){
        if(property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }
    }
}
// creamos la clase hija que extiene
class Padre extends Abuelo{
    public  $telefono;

    public function __construct($nombre, $telefono)
    {
        $this -> telefono = $telefono;
        parent::__construct($nombre);
    }
}
// mostramos por pantalla que los dos objetos puedes mostrar las propiedades
$abuelo = new Abuelo('Jose');
echo("<h2>Abuelo</h2>");
echo('Nombre: '. $abuelo->__get('nombre')."<br>");
$abuelo->__set('edad', 63);
echo('Edad: '.$abuelo->__get('edad')."<br>");

$padre = new Padre('Pepe', 639156712);
echo("<h2>Padre</h2>");
echo('Nombre: '. $padre->__get('nombre')."<br>");
$padre->__set("edad", 41);
echo('Edad: '.$padre->__get("edad"). "<br>");
echo('Telefono: '.$padre->__get("telefono"). "<br>");
?>