<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <?php
        //Autoload con fichero de la clase siguiendo un convenio de 
        //denominación y guardado en el un único directorio accesible.
        //Fue pregunta de examen.

        function __autoload($nomclase)
        {
            // remplaza .. por  "" en el contenido de $nomclase
            $nomclase = str_replace("..", "", $nomclase);
            var_dump($nomclase);
            // printa la variable
            echo $nomclase . '<br />';
            //  incluye y evalúa el archivo especificado y si ya ha sido incluido.
            require_once(__DIR__ . "/clases/$nomclase.php");
        }
        // creamos un nuevo objeto
        $o = new Persona;
        // muestra el contenido de la variable
        var_dump($o);
        ?>
    </body>
</html>