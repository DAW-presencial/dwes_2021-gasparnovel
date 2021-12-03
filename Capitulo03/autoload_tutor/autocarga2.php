<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* Autoload con fichero de clases sin seguir ningún convenio de denominación
         * y guardando las clases en cualquier directorio accesible.
         * 
         * Fue pregunta de examen.
         */

         // array que contiene el nombre de las clases y la ruta
        $clases = [
            'Persona' => 'clases/Persona.php',
            'Persona2' => 'clases2/Persona2.php'
        ];
        // funcion que autocarga una clase en
        function __autoload($nomclase) {
            // llamamos a la variable global 
            global $clases;
            // incluimos las clases del array 
            include $clases["$nomclase"];
        }
        // creamos dos objetos con diferentes clases 
        $obj1 = new Persona;
        $obj2 = new Persona2;
        ?>
    </body>
</html>