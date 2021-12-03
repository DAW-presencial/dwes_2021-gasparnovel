<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Ejemplo de función anónima para definir la autocarga        
        spl_autoload_register(function ($nomclase) {
            // incluye y evalúa el archivo especificadoy sino da un error
            require __DIR__ . "/clases/$nomclase.php";
            // vemos en que directorio estamos
            var_dump(__DIR__);
        });
        // creamos un nuevo objeto
        $o = new Persona;
        ?>
    </body>
</html>