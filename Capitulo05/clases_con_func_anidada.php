<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>  
        <?php
        // clase
        class foo {
            // funcion 
            public function init()
            {   // si la funcion existe
                if (!function_exists('a'))
                {   // funcion
                    function a()
                    {  
                        echo "Función seudoanidada. ";
                    }
                }
            }
        }
        // objeto
        $o = new foo;
        $o->init();
        a();
        ?>
    </body>
</html>