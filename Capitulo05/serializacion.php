<!doctype html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Persona {

            const APELLIDO = 'Porcel';

            var $nom, $apellido;
            static $varestatica = "Esto es una variable estática de clase";
            protected $obj_protegido = "Protegido";
            protected $segundoprotegido;

            function __construct($n = 'Gaspar', $apel = 'Novel') {
                $this->nom = $n;
                $this->apellido = $apel;
                echo self::$varestatica;
            }

            function mostrarNombre() {
                echo "El nombre es: $this->nom $this->apellido";
            }

            function __sleep() {
                echo "hola mundo cruel<br />";
                return array_keys(get_object_vars($this));
            }

            function __wakeup() {
                echo "Estamos deserializando";
            }

        }

        $object = new Persona;
        // solo se muestran los public
        $resultado = get_object_vars($object);
        echo "resultado es: <br />";
        var_dump($resultado);

        echo "El apellido es: " . Persona::APELLIDO;

        ?>
    </body>
</html>